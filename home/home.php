<?php
	
	session_start();

	if(!isset($_SESSION['userlogin'])){
		header("location: ../index.php");
	}

	if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION);
		header("location: ../index.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://kit.fontawesome.com/81c66757f7.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>



	<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
		  <div class="container">
		  	<a class="navbar-brand" href="#">CMU</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav ml-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="#">Home</a>
		      </li>
		      <li class="nav-item active">
		        <a class="nav-link" href="#">Profile</a>
		      </li>
		      <li class="nav-item active">
		        <a class="nav-link" href="#">Message</a>
		      </li>
		      <li class="nav-item active">
		        <a class="nav-link" href="#">Settings</a>
		      </li>
		      <li class="nav-item active">
		        <a class="nav-link" href="home.php?logout=true">Logout</a>
		      </li>
		    </ul>
		    
		  </div>
	  </div>
	</nav>


	
	<header>
		<div class="container">
			<div class="banner-text">
				<div class="text-area">
					<span>H</span>
					<span>E</span>
					<span>L</span>
					<span>L</span>
					<span>O</span>
				</div>

				<p>CMU ASAN NA STUDY LOAD NAMIN!!!!! CMU ASAN NA STUDY LOAD NAMIN!!!!! CMU ASAN NA STUDY LOAD NAMIN!!!!! CMU ASAN NA STUDY LOAD NAMIN!!!!! CMU ASAN NA STUDY LOAD NAMIN!!!!! CMU ASAN NA STUDY LOAD NAMIN!!!!! CMU ASAN NA STUDY LOAD NAMIN!!!!! CMU ASAN NA STUDY LOAD NAMIN!!!!!</p>

				<p class="banner-btn">
					<a href="#" class="active">Contact</a>
					<a href="#">My Works</a>
				</p>

			</div>
		</div>
	</header>





















<script src="http://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>