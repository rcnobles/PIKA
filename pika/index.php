<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <ul> <!-- Adds the navigation bar. Feel free to add more tabs as you see fit! -->
      <li><a href="#home">Home</a></li>
      <li><a href="#services">Services</a></li>
      <li><a href="#research">Research</a></li>
      <li><a href="contact.html">Contact</a></li>
      <li><a class ="active" herf="index.php">Sign In</a></li>
    </ul>
    <div class="center">
      <h1>Login</h1>
      <form method="post">      <!--Removed pythonweb.py action-->
        <div class="txt_field">
          <input type="text" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="pass">Forgot Password?</div>
        <button class="btn"> <a href="frontpage.php">Login</a> </button>
        <div class="signup_link">
          Not a member? <a href="register.php">Signup</a>
        </div>
      </form>
    </div>
    <div class="info">
      This text is like a lable that gives some info. Idk it was in the mockup.
    </div>
   
  </body>
</html>
