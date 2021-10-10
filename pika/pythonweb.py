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

#mySql_Create_userEmergencyCont_Table = """CREATE TABLE emergencyContactsTest ( 
    #                         emergencyID int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    #                         emer_first_name varchar(50) NOT NULL,
    #                         emer_last_name varchar(50) NOT NULL,
    #                         emer_phone varchar(25) NOT NULL) """

    #mySql_Create_userInfo_Table = """CREATE TABLE userInfoTest ( 
    #                        userProfileID int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    #                        fname varchar(50) FOREIGN KEY REFERENCES userAccInfoTest(first_name),
    #                        lname varchar(50) FOREIGN KEY REFERENCES userAccInfoTest(last_name),
    #                        emergencyContactID int FOREIGN KEY REFERENCES emergencyContactsTest(emergencyID),
    #                        allergyList varchar NOT NULL,
    #                        allergyCount int NOT NULL) """

    #should be added here for creating databases

cur.close()
con.close()
print("<h3>record inserted successfully</h3>")
print("<a href='http://localhost/pika/index.php'>click here to go back</a>")



# add here the new connections and responses to whether the database has been accessed correctly and of the data was stores correctly