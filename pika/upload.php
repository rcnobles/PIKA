<html>
<body>

<?php

/* Get the name of the uploaded file */
$filename = $_FILES[ 'file' ][ 'name' ];

/* Save the uploaded file to the local file */
$location = "upload/".$filename;

/* Save the uploaded file to the local filesystem */
if( move_uploaded_file($_FILES['file']['tmp_name'], $location)){
       echo '<p>File uploaded successfully</p>';

}else{
       echo '<b>Error uploading file.</b>';
}

?>

</body>
</html>
