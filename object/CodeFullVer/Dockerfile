FROM python:3.8

RUN wget -q -O - https://dl-ssl.google.com/linux/linux_signing_key.pub --no-check-certificate | apt-key add - && echo 'deb [arch=amd64] http://dl.google.com/linux/chrome/deb/ stable main' | tee /etc/apt/sources.list.d/google-chrome.list
RUN apt-get update -y
RUN apt-get install -y google-chrome-stable unzip curl libnss3
RUN wget -O /tmp/chromedriver.zip https://chromedriver.storage.googleapis.com/96.0.4664.45/chromedriver_linux64.zip
ADD ./ /app
RUN unzip /tmp/chromedriver.zip chromedriver -d /app/


WORKDIR /app
RUN pip install -r requirements.txt
CMD [ "python", "./app.py" ]