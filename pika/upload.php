<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="upload.css">
        <title>Upload</title>
      </head>
<body>

<?php

/* Get the name of the uploaded file */
$filename = $_FILES[ 'file' ][ 'name' ];

/* Save the uploaded file to the local file */
$location = "upload/".$filename;

/* Save the uploaded file to the local filesystem */
if( move_uploaded_file($_FILES['file']['tmp_name'], $location)){
       echo '<div><p>INGREDIENTS: SUGAR, ENRICHED BLEACHED FLOUR (WHEAT <br>

        FLOUR, NIACIN, REDUCED IRON, THIAMIN MONONITRATE,
        RIBOFLAVIN, FOLIC ACID), <br> CHOCOLATE CHIPS
        (SUGAR, CHOCOLATE LIQUOR, COCOA BUTTER, SOY LECITHIN<br>
        
        [EMULSIFIER], VANILLA), COCOA (PROCESSED WITH ALKAL)),
        CANOLA OR SOYBEAN OIL, <br>BITTERSWEET CHOCOLATE CHIPS
        (CHOCOLATE LIQUOR, SUGAR, COCOA BUTTER, MILK FAT,
        <br>SOY LECITHIN [EMULSIFIER], VANILLA), MILK CHOCOLATE
        CHIPS (SUGAR, WHOLE MILK POWDER, <br>CHOCOLATE LIQUOR,
        COCOA BUTTER, SOY LECITHIN [EMULSIFIER], VANILLA), SALT,<br>
        
        ARTIFICIAL FLAVOR, SODIUM BICARBONATE.</p></div>';

}else{
       echo '<b>Error uploading file.</b>';
}

?>

</body>
</html>
