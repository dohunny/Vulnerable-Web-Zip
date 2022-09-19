from json import encoder
from flask import Flask, render_template, request, make_response, url_for, redirect
import jwt, random, string
from itertools import permutations

app = Flask(__name__)
app.config['FLAG'] = open('./flag.txt').read()
key_list = list(map(lambda x: "".join(x), permutations(string.printable[10:36], 5)))
app.config['JWT_SECRET_KEY'] = key_list[random.randint(0,len(key_list))]

def create_session_token(username):
    payload = {
        'username': username,
        'level': 1
    }
    print(app.config['JWT_SECRET_KEY'])
    jwt_token = jwt.encode(payload, app.config['JWT_SECRET_KEY'], algorithm="HS256")
    return payload['username'], payload['level'], jwt_token

def signature_verification(encoded):
    error, decoded, user = "", "", ""
    try:
        decoded = jwt.decode(encoded, app.config['JWT_SECRET_KEY'], algorithms=["HS256"])
    except Exception as e:
            user = "None"
            level = -1
            error = "Session Error...!"
            error = "E rror: " + str(e)
    else:
        user = decoded['username']
        level = decoded['level']
        
    return user, level, error

@app.route('/', methods=["GET"])
def index():
    return redirect(url_for('main', username="guest"))

@app.route('/main', methods=["GET"])
def main():
    user, error, level, jwt_token = "", "", "", ""

    encoded = request.cookies.get('session')
    if encoded is None:
        if 'username' in request.args.to_dict():
            user, level, jwt_token = create_session_token(request.args.to_dict()['username'])
        else:
            return redirect(url_for('main', username="guest"))
    else:
        # decode jwt token
        user, level, error = signature_verification(encoded)
        jwt_token = encoded
        if 'username' in request.args.to_dict() and user != "None" and request.args.to_dict()['username'] != user:
            user, level, jwt_token = create_session_token(request.args.to_dict()['username'])

    res = make_response(render_template('index.html', user=user, error=error, level=level))
    res.set_cookie('session',jwt_token)
    return res 

@app.route('/secret')
def login():
    encoded = request.cookies.get('session')
    try:
        _, level, _ = signature_verification(encoded)
        if level >= 9999:
            return app.config['FLAG']
    except:
        pass
    
    return "<script>alert('Admin Only. (Level >= 9999)'); history.go(-1);</script>"

if __name__ == '__main__': 
    app.run(host='0.0.0.0', debug=True)