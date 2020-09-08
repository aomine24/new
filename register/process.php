<?php


	require_once('connection.php');


	if(isset($_POST['btn-save'])){
		$sql = "INSERT INTO mydatabase (username, email, password) VALUES ('$username', '$email', '$password')";

		if ($conn->query($sql) === TRUE) {
			  echo "New record created successfully";
		} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}



?>