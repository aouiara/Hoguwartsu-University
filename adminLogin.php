<?php
	include('connect.php');
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Welcome!</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="icon" href="Logo.png">
	<!-- BOOTSTRAP CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<!--FONTAWESOME CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	
	
</head>
<body class="body-adminLogin">
	<div class="black-fill"> <br /> <br />
		<div class="container">
			<nav class="navbar navbar-expand-lg bg-light"
				id="homeNav">
				<div class="container-fluid">
					<a class="navbar-link" href="Home.php">
						<img src="BWlogo.png" width="50">
					</a>
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link" href="Home.php">Home</a>
						</li>
					</ul>	
				</div>
			</nav> 
		<br /> <br />
			<div class="row g-3 needs-validation">
					<div class="col-5">
                    <form action="adminCheck.php" method="POST">
						<div class="form-floating">
							<input type="text" class="form-control" id="userId" placeholder="userId" name="userId" required>
							<label for="floatingInput">Admin ID</label>
							<br /> <br />
								<div class="form-floating">
								<input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
								<label for="floatingPassword">Password</label>
							</div> <br /> <br />
							<div class="d-grid gap-2 col-6 mx-auto">
								<button type="Login" class="btn btn-light" data-bs-toggle="button" name="login" onclick="loginCheck()">Login</button>
							</div>
						</div>
					</div>
						<div class="col-5">
							<section class="welcome-text d-flex justify-content-center align-items-center flex-column">
								<img src="Logo.png">
								<h4>Login to Hoguwartsu University</h4>
								<p>Please Login with your Admin Credential</p>
							</section>
						</div>
                    </form>
			</div>	
		</div>		
	</div>

</body>
</html>
