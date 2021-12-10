<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
  </head>
  <body>
    <div class="center">
      <h1>Sign Up</h1>
      <form action="connectReg.php" method="post">
        <div class="txt_field">
          <input type="text" required class="form-control" id="userName" name="userName">
          <span></span>
          <label for="username">Username</label>
        </div>
        <div class="txt_field">
          <input type="text" required class="form-control" id="email" name="email">
          <span></span>
          <label for="email">Email</label>
        </div>
        <div class="txt_field">
          <input type="password" required class="form-control" id="password" name="password">
          <span></span>
          <label for="password">Password</label>
        </div>
        <div class="txt_field">
          <input type="password" required class="form-control" id="confirmPass" name="confirmPass">
          <span></span>
          <label for="confirmPass">Confirm Password</label>
        </div>
        <button class="btn">Sign Up</a> </button>
        <div class="signup_link">
          Have an account? <a href="index.php">Login Here</a>
        </div>
      </form>
    </div>
    <div class="info">
      Welcome to Pika!
    </div>
   
  </body>
</html>