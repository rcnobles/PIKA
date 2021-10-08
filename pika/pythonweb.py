#!C:/Python38/python
print("Content-Type:text/html")
print()
import cgi

print("<h1>Welcome to Pika</h1>")
print("<hr/>")
print("<h1>record inserted successfully</h1>")
print("<body bgcolor='blue'>")

form=cgi.FieldStorage()

id=form.getvalue("id")
firstname=form.getvalue("firstname")
lastname=form.getvalue("lastname")
allergy=form.getvalue("allergy")
allergycount=form.getvalue("allergycount")
emernum=form.getvalue("emernum")

import mysql.connector

con=mysql.connector.connect(user='root', password='', host='localhost', database='allergyweb')
cur=con.cursor()

cur.execute("insert into user values(%d,%s,%s,%s,%d,%d)",(id,firstname,lastname,allergy,allergycount,emernum))
con.commit()

cur.close()
con.close()
print("<h3>record inserted successfully</h3>")
print("<a href='http://localhost/pika/index.php'>click here to go back</a>")