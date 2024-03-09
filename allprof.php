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
	
    <title>Students</title>
</head>
<body class="body-dash">
    <div class="black-fill"> <br/>
        <div class="container">
            <div class="row">
                    <section class="dashboard-text d-flex justify-content-center align-items-center flex-column">
                        <img src="Logo.png">
                        <h4>All Instructors</h4>
                    </section>
            </div>
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
                            <ul class="navbar-nav me-right mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" href="home.php">Log out</a>
                                </li>
                            </ul>
                </div>
            </nav> <br /> <br />
                <!--START INSERTION -->
                <div class = "row">
                    <div class="col col-lg-2">  
                            <?php
                            if(isset($_GET['id'])){
                                $id = $_GET['id'];
                                $query = "SELECT * FROM Instructors
                                WHERE instructor_id = $id;";
                                $result = sqlsrv_query($conn, $query);
                                while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)){
                                    $fname = $row['fname'];
                                    $lname = $row['lname'];
                                    $deptId = $row['department_id'];
                                }
                                ?>
                                <div class="col">
                                <form action="updateProf.php" method="POST">
                                    <input type="hidden" name="id" value="<?=$id?>">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa-regular fa-user" style="color: #000000;"></i>
                                        </span>
                                        <input type="text" class="form-control" placeholder="First Name" name="fname" value="<?=$fname ?>">
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa-regular fa-user" style="color: #000000;"></i>
                                        </span>
                                        <input type="text" class="form-control" placeholder="Last Name"  name="lname"  value="<?=$lname ?>">
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa-solid fa-building-user" style="color: #000000;"></i>
                                        </span>
                                        <input type="text" class="form-control"  name="deptId"  value="<?=$deptId ?>">
                                    </div>
                                    <a href="allProf.php" class="btn btn-secondary"><i class="fa-solid fa-circle-left"></i> Back</a>
                                    <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Save</button>
                                </form>
                                    </div>
                                    <?php
                                } 
                                else 
                                {
                                ?>
                                <form action="insertProf.php" method="POST">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="floatingInput" placeholder="First Name" name="fname" required>
                                        <label for="floatingInput">First Name</label>
                                    </div>
                                    <div class="col"> <br />
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="Last Name" name="lname" required>
                                            <label for="floatingInput">Last Name</label>
                                        </div>
                                        </div>
                                    <div class="col"> <br/>
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="deptId" name="deptId" required>
                                            <label for="bday">Department ID</label>
                                        </div>
                                    </div> <br/>
                                    <button type="submit" class="btn btn-success"><i class="fa-solid fa-arrow-right-to-bracket" style="color: #fffff;"></i> Enter</button>
                                    </form>
                                <?php
                            }
                            ?>
                        
                    </div>
                        <div class="col">
                            <table class="table table-borderless">
                                <thead>
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Department ID</th>
                                    <th>Department Name</th>
                                    <th colspan=2>Action</th>
                                </thead>
                                <tbody>
                                    <?php
                                        $query = "SELECT instructor_id, fname, lname, 
                                                    Instructors.department_id, department_name 
                                        FROM Instructors
                                        JOIN Departments
                                        ON Departments.department_id = Instructors.department_id;";
                                        $result = sqlsrv_query($conn, $query);
                                        if($result){
                                            while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)){
                                                ?>
                                                <tr>
                                                    <td> <?php echo $row['instructor_id'] ?> </td>
                                                    <td> <?php echo $row['fname'] ?> </td>
                                                    <td> <?php echo $row['lname'] ?> </td>
                                                    <td> <?php echo $row['department_id'] ?> </td>
                                                    <td> <?php echo $row['department_name'] ?> </td>
                                                    <td>
                                                        <a class="btn btn-light" href="allProf.php?id=<?php echo $row['instructor_id'] ?>">
                                                            <i class="fa-solid fa-pencil"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-light" onclick="deleteData(<?=$row['instructor_id'] ?>)">
                                                            <i class="fa-solid fa-trash" style="color: #a50909;"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                        } else {
                                            echo "Error encounted please try again later...";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
            </div>
        </div>
	</div>
</body>
</html>

<script type="text/javascript">
	function deleteData(id){
		window.location.href = 'deleteProf.php?id=' + id;
	}
</script>