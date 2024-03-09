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
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="icon" href="Logo.png">
	<!-- BOOTSTRAP CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<!--FONTAWESOME CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	
</head>
<body class="body-reg">
	<div class="black-fill"> <br /> <br />
		<div class="container">
			<nav class="navbar navbar-expand-lg bg-light"
                    id="homeNav">
                <div class="container-fluid">
                        <a class="navbar-brand" href="admin.php">
                            <img src="BWlogo.png" width="40">
                        </a>
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="admin.php">Back</a>
                            </li>
                        </ul>
                </div>
            </nav> <br />
			<div class="row g-3">
					<div class="col-5">
						<form action="insertStudent.php" method="POST">
							<input type="hidden" name="studId" value="<?=$id?>">
							<div class="form-floating">
								<input type="text" class="form-control" id="floatingInput" placeholder="First Name" name="fname" required>
								<label for="floatingInput">First Name</label>
							 	<br /> <br />
								<div class="form-floating">
									<input type="date" class="form-control" id="bday" name="bday" required>
									<label for="bday">Birthday</label>
								</div>
							</div>
					</div> 
						<div class="col-5">
							<div class="form-floating">
								<input type="text" class="form-control" id="floatingInput" placeholder="Last Name" name="lname" required>
								<label for="floatingInput">Last Name</label>
								<br /> <br />
								<div class="form-floating">
									<input type="password" class="form-control" id="pass" placeholder="Password" name="pass" required>
									<label for="floatingPassword"> Create a Password</label>
								</div>
							</div>
						</div> 
							<div class="d-grid gap-2 col-6 mx-auto">
								<button type="Register" class="btn btn-light" data-bs-toggle="button" name="register">Register</button>
							</div>
						</form>
			</div>	 <br /> <br />
			<section class="reg-text d-flex justify-content-center align-items-center flex-column">
				<img src="Logo.png">
				<h4>Register to Hoguwartsu University</h4>
			</section>	
		</div>		
	</div>

</body>
</html>

