<?php
	include('connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Welcome!</title>
	<link rel="icon" href="Logo.png">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- BOOTSTRAP CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<!--FONTAWESOME CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	
</head>
<body class="body-home">
	<div class="black-fill"> <br /> <br />
		<div class="container">
		<nav class="navbar navbar-expand-lg bg-light"
			id="homeNav">

			<div class="container-fluid">
				<a class="navbar-brand" href="home.php">
					<img src="BWlogo.png" width="50">
				</a>
				
					<ul class="navbar-nav me-right mb-4 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link" href="StudentRegister.php">Student Registration</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="adminLogin.php">Admin</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="Login.php">Login</a>
						</li>
					</ul>
			</div>
						</nav> 
						<section class="welcome-text d-flex justify-content-center align-items-center flex-column">
							<img src="Logo.png">
							<h4>Welcome to Hoguwartsu University</h4>
							<p>Please select from the Logins above the one that best suits you or register first.</p>
						</section>


						</div>

	</div>


</body>
</html>

