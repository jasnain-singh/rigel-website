### ************* MAIN INPUT ************* ###
from firebase import firebase


firebase = firebase.FirebaseApplication("your-firebase-database-link", None)

#DIALOG BOX
import tkinter as tk

from tkinter import *
from functools import partial

def validateLogin(username, password):
	print("username entered :", username.get())
	print("email entered :", email.get())
	return

#window
tkWindow = Tk()  
tkWindow.geometry('400x150')  
tkWindow.title('Rigel Basic Form')

#username label and entry box
usernameLabel = Label(tkWindow, text="Name").grid(row=0, column=0)
username = StringVar()
usernameEntry = Entry(tkWindow, textvariable=username).grid(row=0, column=1)  

#email label and entry box
emailLabel = Label(tkWindow,text="Email ID").grid(row=1, column=0)  
email = StringVar()
emailEntry = Entry(tkWindow, textvariable=email).grid(row=1, column=1)  

validateLogin = partial(validateLogin, username, email)

#login button
loginButton = Button(tkWindow, text="Submit", command=validateLogin).grid(row=4, column=0)  

tkWindow.mainloop()

data = {
        'Name': username.get(),
        'Email': email.get()
        }

result = firebase.post('your-database-link/your-database-name', data)
print(result)



### ************* SENDING MAIL ************* ###
import smtplib
server = smtplib.SMTP('smtp.gmail.com', 587)
server.starttls()

fromAddress = 'the-email-from-which-you-want-to-send-the-mail'
toAddress = email.get()
pWord = 'password-of-the-fromAddress-email'
server.login(fromAddress, pWord)
server.sendmail(fromAddress, toAddress,
                'GREETINGS FROM RIGEL TECHNOLOGIES!\n\n\nThank you for registering to the Rigel Technologies Website.\nRigel is a leading training and software development company striving continuously to upgrade and better the performances of our teams, our work-process, and our skills to help serve our clients better.\nOur involvement in both the academic and industrial segments gives us an unique advantage AND we have worked on a variety of projects covering almost all technologies and domains.')
