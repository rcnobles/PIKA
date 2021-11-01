<?php
	$inAllergy = $_POST['inAllergy'];
	$product = $_POST['product'];
	$symptoms = $_POST['symptoms'];

	// Database connection
	$conn = new mysqli('localhost','root','','allergyweb');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into allergy(inAllergy, product, symptoms) values(?, ?, ?)");
		$stmt->bind_param("sss", $inAllergy, $product, $symptoms);
		$execval = $stmt->execute();
		echo $execval;
		echo "Inserted successfully...";
		$stmt->close();
		$conn->close();
	}
?>