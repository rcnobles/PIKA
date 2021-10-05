# This python file should create a database called 'testUserAcc' with a table called 'userAccInfoTest'
# userID = automatically incremented and is primary key of table
# first_name = user first name
# last_name = user last name
# userAccName = username the user specifies in account creation
# userAccPassword = user account password, will have to encrypt later but for development sake, it is unencrypted
# userEmail = user specified email



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

    mySql_Create_userAcc_Table = """CREATE TABLE userAccInfoTest ( 
                             userID int PRIMARY KEY AUTO_INCREMENT,
                             first_name varchar(50) NOT NULL,
                             last_name varchar(50) NOT NULL,
                             userAccName varchar(25) NOT NULL,
                             userAccPassword varchar(50) NOT NULL,
                             userEmail varchar(50) NOT NULL) """

    #tried to create more tables that have foreign keys that are conencted to userAccInfoTest table                         
                      
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


    cursor = connection.cursor()
    result = cursor.execute(mySql_Create_userAcc_Table)
    print("userAccInfoTest Table created successfully")

    #code below is for executing creation of tables and printing if tables were made successfully
    """
    cursor = connection.cursor()
    result = cursor.execute(mySql_Create_userInfo_Table)
    print("userAccInfoTest Table created successfully")

    cursor = connection.cursor()
    result = cursor.execute(mySql_Create_userEmergencyCont_Table)
    print("userAccInfoTest Table created successfully")
    """

except mysql.connector.Error as error:
    print("Failed to create table in MySQL: {}".format(error))
finally:
    if connection.is_connected():
        cursor.close()
        connection.close()
        print("MySQL connection is closed")
