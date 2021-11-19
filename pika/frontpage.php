<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="home.css">
  </head>
  <body>
  <ul> <!-- Adds the navigation bar. Feel free to add more tabs as you see fit! -->
      <li><a href="frontpage.php">Home</a></li>
      <li><a href="about.html">About</a></li>
      <li><a href="services.html">Services</a></li>
      <li><a href="research.html">Research</a></li>
      <li><a href="contact.html">Contact</a></li>
      <li><a herf="/">Sign In</a></li>
    </ul>
    <div class="center">
      <h1>Allergy List</h1>
      <form method="post">
        <div class="info">
            View, Edit, and Share your list of Allergies. 
         </div>
         <button class="btn"> <a href="allergy.php">View Allergy List</a> </button>
      </form>
    </div>
    <div class="middle">
        <h1>View Data</h1>
        <form method="post">
          <div class="info">
            View and Share your Data!
           </div>
          <input type="submit" value="View Your Data">
        </form>
      </div>
      <div class="camera">
        <h1>Scan Item</h1>
        <form method="post">
          <button class="btn"> <a href="uploader.php">Scan Ingredients</a> </button>
        </form>
      </div>
  </body>
</html>