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
	<link rel="icon" href="Logo.png">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- BOOTSTRAP CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<!--FONTAWESOME CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	
</head>
<body class="body-dash">
	<div class="black-fill"> <br /> <br />
		<div class="container">
		<div class="row">
			<div class="col-1">
				<section class="dashboard-text d-flex justify-content-center align-items-center flex-column">
					<img src="Logo.png">
					<h4>Welcome!</h4>
				</section>
			</div>
			<div class="col-lg">
				<nav class="navbar navbar-expand-lg bg-light" id="homeNav">
					<div class="container-fluid">
						<a class="navbar-brand" href="home.php">
							<img src="BWlogo.png" width="50">
						</a>
						<ul class="navbar-nav me-auto mb-2 mb-lg-0">
							<li class="nav-item">
								<a class="nav-link" href="StudInfo.php">Student Information</a>
							</li>
						</ul>
						<ul class="navbar-nav me-right mb-2 mb-lg-0">
							<li class="nav-item">
								<a class="nav-link" href="home.php">Log out</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div> <br /> <br />
			<div class="row g-3">
				<div class="col-4">
					<div class="card" style="width: 18rem;">
						<img src="img/courses.jpg" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">Courses</h5>
							<p class="card-text">Collection of courses you are enrolled.</p>
							<a href="courses.php" class="btn btn-primary">Go</a>
						</div>
					</div> 
				</div>
				<div class="col-4">
					<div class="card" style="width: 18rem;">
						<img src="img/reg.jpg" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">Course Registration</h5>
							<p class="card-text">Courses you are currently registered.</p>
							<a href="courseReg.php" class="btn btn-primary">Go</a>
						</div>
					</div> 
				</div>
				<div class="col-4">
					<div class="card" style="width: 18rem;">
						<img src="img/enrll.jpg" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">Enrollment</h5>
							<p class="card-text">Selection of courses you wish to enroll on.</p>
							<a href="enrollment.php" class="btn btn-primary">Go</a>
						</div>
					</div> 
				</div>
			</div>
		</div>
	</div>

</body>
</html>

