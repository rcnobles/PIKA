<?php
	$username = $_POST['username'];
	$password = $_POST['password'];

	// Database connection
	$conn = new mysqli('localhost','root','','allergyweb');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into user(username, password) values(?, ?)");
		$stmt->bind_param("ss", $username, $password);
		$execval = $stmt->execute();
		echo $execval;
		$stmt->close();
		$conn->close();
	}
    header("Location: http://localhost/pika/frontpage.php");
	exit();
?>