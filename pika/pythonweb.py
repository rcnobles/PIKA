#!C:/Python38/python
print("Content-Type:text/html")
print()
import cgi

print("<h1>Welcome to Pika</h1>")
print("<hr/>")
print("<h1>Using input tag</h1>")
print("<body bgcolor='blue'>")

form=cgi.FieldStorage()

user_id=form.getvalue("user_id")
first_name=form.getvalue("first_name")
last_name=form.getvalue("last_name")
allergies_text=form.getvalue("allergies_text")
allergy_count=form.getvalue("allergy_count")
emergency_contact_id=form.getvalue("emergency_contact_id")

import mysql.connector

con=mysql.connector.connect(user='root', password='', host='localhost', database='pika')
cur=con.cursor()

cur.execute("insert into user values(%s,%s,%d,%d,%d,%s)",(first_name,last_name,user_id,emergency_contact_id,allergy_count,allergies_text))
con.commit()

cur.close()
con.close()
print("<h3>record inserted successfully</h3>")
print("<a href='http://localhost/pika/index.php'>click here to go back</a>")