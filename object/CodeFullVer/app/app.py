from flask import Flask, request, render_template
from flask_uuid import FlaskUUID
import os, uuid, bleach
from selenium import webdriver
from sqlalchemy import Column, TEXT
from sqlalchemy_utils import UUIDType
from flask_sqlalchemy import SQLAlchemy
from webdriver_manager.chrome import ChromeDriverManager
from selenium.webdriver.chrome.service import Service
from bs4 import BeautifulSoup

app = Flask(__name__)
app.secret_key = os.urandom(32)
FlaskUUID(app)

try:
    FLAG = open('./flag.txt', 'r').readline().strip()
except:
    FLAG = '[**FLAG**]'

# DB
db = SQLAlchemy()
def init_db(app):
    db.init_app(app)
    with app.app_context():
        db.create_all()
    return db

class Report(db.Model):
    __tablename__ = 'reports'
    uid = Column(UUIDType(binary=False), primary_key=True)
    data = Column(TEXT)

def filtering(content):
    ALLOW_TAGS = ['a', 'p', 'div', 'tr', 'td', 'th', 'ul', 'h1', 'h2', 'h3']
    ALLOW_ATTRS = ['href', 'class', 'id', 'name']
    
    content = bleach.clean(content, tags=ALLOW_TAGS, attributes=ALLOW_ATTRS, protocols=["http","https","javascript"])

    return content

app.config['SQLALCHEMY_DATABASE_URI'] = 'sqlite:///object.db'
app.config['SQLALCHEMY_TRACK_MODIFICATIONS'] = False
app.config['selenium_service'] = Service(ChromeDriverManager().install())
db = init_db(app)

@app.route('/')
def index():
    return render_template('index.html')

@app.route('/write', methods=['GET', 'POST'])
def write():
    if request.method == 'POST':
        uid = uuid.uuid4()
        content = str(request.form["content"])
        content = filtering(content)

        if not content:
            return "No Data..."

        page_content = Report(uid=str(uid),data=str(content))
        db.session.add(page_content)
        db.session.commit()
        
        return {'uuid': str(uid)}
    
    else:
        return render_template('write.html')


@app.route('/view')
def view():
    return render_template('view.html')


@app.route('/view/<uuid:uid>')
def page_view(uid):
    report = Report.query.filter_by(uid=uid).first()
    if report:
        return render_template("page_view.html", content=report.data)
    else:
        return 'Not Found !'


def check_url(uuid):
    try:
        options = webdriver.ChromeOptions()
        for _ in ['headless', 'window-size=1920x1080', 'disable-gpu', 'no-sandbox', 'disable-dev-shm-usage']:
            options.add_argument(_)
        driver = webdriver.Chrome(service=app.config['selenium_service'], options=options)
        driver.implicitly_wait(3)
        driver.set_page_load_timeout(3)
        driver.get('http://localhost/')
        driver.add_cookie({'name':'FLAG', 'value':FLAG})
        driver.get(f'http://localhost/view/{uuid}')
        # check error !
    except Exception as e:
        driver.quit()
        return False
    finally:
        driver.quit()
    return True


@app.route('/report', methods=['GET', 'POST'])
def report():
    if request.method == 'POST':
        uid = request.form.get('uuid')
        page = Report.query.filter_by(uid=uid).first()
        if page:
            if(check_url(uid)):
                return 'OK !'
            else:
                return 'Error !'
        return 'Invalid UUID.'
    else:
        return render_template('report.html')


if __name__ == '__main__':
    app.run(host='0.0.0.0', port='80', debug=False)


