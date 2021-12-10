<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="homePage.css">
    <link rel="stylesheet" href="signForm.css">
    

    <title>Home Page</title>
  </head>

  <body onload = "startTimer()">
    <nav class="nav">
      <div class="container">
        <h1 class="logo"><a href="index.php">Pika</a></h1>
        <ul>
            <li><a href="frontpage.php">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="services.html">Services</a></li>
            <li><a href="research.html">Research</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="index.php">Sign In</a></li>
        </ul>
      </div>
    </nav>
    
    <div class="hero">
        <div class="container">
            <h1>Welcome to Pika</h1>
            <p>The aim of this project is to create a web application for users to monitor their dietary needs and prevent the consumption of any food that triggers the user's allergy. We do this by collecting data about the user's diet, nd their allergy, then using text recognition, scan and monitor the ingredients in their foods to make recommendations on their next grocery or food consumption. (based on the allergy and safety of the food).</p>
        </div>
    </div>
    <div class="containerSign" id="containerSign" style="width:800px; margin:0 auto; ">
      <div class="form-container sign-up-container">
        <form action="#">
          <h1>Create Account</h1>
          <div class="social-container">
            <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
            <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <span>or use your email for registration</span>
          <input type="text" placeholder="Name" />
          <input type="email" placeholder="Email" />
          <input type="password" placeholder="Password" />
          <button>Sign Up</button>
        </form>
      </div>
      <div class="form-container sign-in-container">
        <form action="#">
          <h1>Sign in</h1>
          <div class="social-container">
            <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
            <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <span>or use your account</span>
          <input type="email" placeholder="Email" />
          <input type="password" placeholder="Password" />
          <a href="#">Forgot your password?</a>
          <button>Sign In</button>
        </form>
      </div>
      <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-panel overlay-left">
            <h1>Welcome Back!</h1>
            <p>To keep connected with us please login with your personal info</p>
            <button class="ghost" id="signIn">Sign In</button>
          </div>
          <div class="overlay-panel overlay-right">
            <h1>Hello, Friend!</h1>
            <p>Enter your personal details and start journey with us</p>
            <button class="ghost" id="signUp">Sign Up</button>
          </div>
        </div>
      </div>
    </div>

    <script src="homepageScript.js"></script>
    </body>
</html> 