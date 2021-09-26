### About the Server and php file
The server for the web application will be ran locally. Index.php is first web page seen in the application, and pythonweb. py is the server code.  

At the moment index.php has a basic layout thats goal is to connect to the database we created.


**Things needed installed to run server:**
- [Xampp](https://www.apachefriends.org/download.html)
- [Python](https://www.python.org/downloads/)
    - I installed 3.8.10 on Windows
- [MySQL Connector](https://dev.mysql.com/doc/connector-python/en/connector-python-installation-binary.html) (assuming you have MySQL installed)
- (i think you're also going to need to download the .sql file and import it into a database idk yet)


**How to run server and webpage:**
1. Launch Xampp and click on "config" on the Apache row, and select "Apache (httpd.conf)"
2. Ctrl+F and look for "AddHandler" and at the end add ".py" 
3. Download the pika folder and move it into  
    > C:\xampp\htdocs\
4. Open the pythonweb .py file and at the top edit the corresponding path for where you downloaded python
    > #!C:/Python38/python
5. On Xampp start both the Apache and MySQL services then go to:
    > localhost/pika/index.php


**Known Bugs or Errors**
- At the moment the server can conncent to the database, but not store anything that is inputted (not sure why yet)
