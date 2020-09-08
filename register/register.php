<?php
require_once('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://kit.fontawesome.com/81c66757f7.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Karla:ital@1&display=swap" rel="stylesheet">





<body>


	<?php


	if(isset($_POST['btn-save'])){
                $username   = $_POST['username'];
                $email       = $_POST['email'];
                $password    = $_POST['password'];

                $sql = "INSERT INTO users (username, email, password) VALUES(?,?,?)";
                $stmtinsert = $db->prepare($sql);
                $result = $stmtinsert->execute([$username, $email, $password]);
                if ($result) {
                    echo "Successfully Saved!";
                    header("location:../index.php");
                }else{
                    echo "There were errors while saving the data.";
                    header("location:register.php");
                }

                
            }


 ?>





 	
		<div class="signup-form">
			<img src="../img/user.png">
			<form action="register.php" method="POST">
				<input type="text" placeholder="User name" class="txt" name="username" required>
				<input type="email" placeholder="Email" class="txt" name="email">
				<input type="password" placeholder="Password" class="txt" name="password" required>
				<input type="password" placeholder="Confirm Password" class="txt" name="cpass" required>
				<input type="submit" value="Create a Account" class="btn" name="btn-save" required>
				<a href="../index.php">Already Have a Account</a>
			</form>
		</div>
	



</body>
</html>