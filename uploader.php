<!DOCTYPE html>
<html>
  <head>
    <title> PHP File Upload </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="upload.css">
  </head>


  <body>
    <div class="upload">
        <h1>Scan Item</h1>
        <form action = "upload.php" method = "post" enctype = "multipart/form-data" >
            <input type = "file" name = "file" />
            <label>
                <input type = "submit" value= "Upload" />
            </label>
          </form>
      </div>

  </body>
</html>
