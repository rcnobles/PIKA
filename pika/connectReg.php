<?php
	$userName = $_POST['userName'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirmPass = $_POST['confirmPass'];

	// Database connection
	$conn = new mysqli('localhost','root','','allergyweb');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(userName, email, password, confirmPass) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $userName, $email, $password, $confirmPass);
		$execval = $stmt->execute();
		echo $execval;
		$stmt->close();
		$conn->close();
	}
	header("Location: http://localhost/pika/frontpage.php");
	exit();
?>