# This python file connects to the database and inserts a row with information into the database testUserAcc
# Then this file will also print all entries listed in the table

import mysql.connector

db = mysql.connector.connect(
    host = "localhost",
    user = "root",
    password = "",
    database = 'testUserAcc'
)

try:
    connection = mysql.connector.connect(host='localhost',
                                         database='testUserAcc',
                                         user='root',
                                         password='')


    #adding data to table as an example, this should be a test case of inserting infrmation into the table
    mycurser = db.cursor()
    mycurser.execute("INSERT INTO userAccInfoTest (first_name, last_name, userAccName, userAccPassword, userEmail) VALUES (%s, %s, %s, %s, %s)", ("user1", "firstUser", "testUser1", "1234", "user1@gmail.com"))
    db.commit()

    sql_select_Query = "select * from userAccInfoTest"
    cursor = connection.cursor()
    cursor.execute(sql_select_Query)
    # get all records
    records = cursor.fetchall()
    print("Total number of rows in table: ", cursor.rowcount)

    print("\nPrinting each row")
    for row in records:
        print("User ID = ", row[0], )
        print("First Name = ", row[1])
        print("Last Name = ", row[2])
        print("Username = ", row[3])
        print("User Email = ", row[5])

except mysql.connector.Error as e:
    print("Error reading data from MySQL table", e)
finally:
    if connection.is_connected():
        connection.close()
        cursor.close()
        print("MySQL connection is closed")