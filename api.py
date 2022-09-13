#API Connector
from typing import Union
from authenticate import *
from fastapi import FastAPI,File, UploadFile
from fastapi import Depends, FastAPI
from fastapi.security import OAuth2PasswordBearer

app = FastAPI()

@app.get("/login/")
def login():   
    username = input("Username: ")
    password = input("Password: ")
    token = input("Token: ")
    authen = username+("$") + password+"$"+token
    return {"username": username,
    "password": password,
    "token": token}

@app.post("/login/file_upload")
async def file_upload(file: UploadFile):
      return {"file_name": file.filename}




