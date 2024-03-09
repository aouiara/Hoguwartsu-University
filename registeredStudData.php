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

<body class="body-donereg">
	<div class="black-fill"> <br /> <br />
		<div class="container">
		<nav class="navbar navbar-expand-lg bg-light"
			id="homeNav">
			<div class="container-fluid">
				<a class="navbar-brand" href="home.php">
					<img src="BWlogo.png" width="40">
				</a>
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link" href="Login.php">Login</a>
						</li>
					</ul>
            </div>
        </nav> 
        <div class="col">
            <table class="table table-borderless">
                <thead>
                    <th>Student ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Birthday</th>
                </thead>
                <tbody>
                    <?php
                        $query = "SELECT TOP(1) * FROM Students 
                        ORDER BY student_id
                        DESC ;";
                        $result = sqlsrv_query($conn, $query);
                        if($result)
                        {
                            while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)){
                                ?>
                                <tr>
                                    <td> <?php echo $row['student_id'] ?> </td>
                                    <td> <?php echo $row['fname'] ?> </td>
                                    <td> <?php echo $row['lname'] ?> </td>
                                    <td> <?php echo $row['bday']->format('M d, Y') ?> </td>
                                </tr>
                                <?php
                            }
                        } else {
                            echo "Error encounted please try again later...";
                        }
                    ?>
                    
                </tbody>
            </table>
            <section class="welcome-text d-flex justify-content-center align-items-center flex-column">
			<img src="Logo.png">
			<h4>Thank you for registering</h4>
			<p>Please take note of your Student Id for Login.</p>
		</section>
        </div>
        </div>
    </div>


</body>
</html>

   