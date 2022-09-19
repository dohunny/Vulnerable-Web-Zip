FROM python:3.8

WORKDIR /app

ADD . ./
RUN pip install --no-cache-dir -r requirements.txt

COPY ./app/app.py /app/
CMD [ "python", "./app.py" ]