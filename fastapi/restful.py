#API Connector
from typing import Union

from fastapi import FastAPI,File, UploadFile

app = FastAPI()


@app.get("/login/")
def login(username,password,sessionkey,time):
    return {"Hello": "World"}


@app.post("/login/file_upload")
async def file_upload(file: UploadFile):
      return {"file_name": file.filename}