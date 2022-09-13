from api import *

login()
filename = input("Filename.txt: ")
file_upload(filename)
configRead = open("./config.txt","r")
