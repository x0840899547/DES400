def authenticate():
    username = input("Username: ")
    password = input("Password: ")
    token = input("Token: ")
    authen = username+("$") + password
    #print("Authentication: " +authen+"$"+token)
    return {authen,"$",token}
    