FROM python:3.9

RUN mkdir /app
WORKDIR /app
ADD . /app/
RUN pip install -r dependencies.txt

EXPOSE 5000
CMD ["python", "/app/main.py"]