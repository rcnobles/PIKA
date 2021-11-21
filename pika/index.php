<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="center">
      <h1>Login</h1>
      <form action="connectIndex.php" method="post">
        <div class="txt_field">
          <input type="text" required class="form-control" id="username" name="username">
          <span></span>
          <label for="username">Username</label>
        </div>
        <div class="txt_field">
          <input type="password" required class="form-control" id="password" name="password">
          <span></span>
          <label for="password">Password</label>
        </div>
        <div class="pass">Forgot Password?</div>
        <button class="btn">Login</a> </button>
        <div class="signup_link">
          Not a member? <a href="register.php">Signup</a>
        </div>
      </form>
    </div>
    <div class="info">
      Welcome to Pika!
    </div>
   
  </body>
</html>
