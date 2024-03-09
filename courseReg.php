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
	<div class="black-fill"> 
		<div class="container">
        <div class="row">
                    <section class="dashboard-text d-flex justify-content-center align-items-center flex-column">
                        <img src="Logo.png">
                        <h4>Below are your registered classes!</h4>
                    </section>
                </div> 
		<nav class="navbar navbar-expand-lg bg-light"
			id="homeNav">
			<div class="container-fluid">
				<a class="navbar-brand" href="home.php">
					<img src="BWlogo.png" width="40">
				</a>
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link" href="dashboard.php">Back</a>
						</li>
					</ul>
                    <ul class="navbar-nav me-right mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link" href="home.php">Log out</a>
						</li>
					</ul>
            </div>
        </nav> 
        <div class="col">
            <?php
            if(isset($_GET['id']))
            {
				$id = $_GET['id'];
				
            }
				?>
            <input type="hidden" name="id" value="<?=$id?>">
            <table class="table table-borderless table-hover">
                <thead>
                    <th>Course Name</th>
                    <th>Instructor ID</th>
                    <th>Instructor Name</th>
                    <th>Department Name</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php
                    if(isset($_GET['id]']))
                    {
                        $id = $_GET['id'];
                        $query = "SELECT * FROM Class WHERE class_id=$id;";
     			        $result = sqlsrv_query($conn, $query);
				        while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC))
                        {
                            $cId = $row['course_id'];
                            $cName = $row['course_name'];
                            $insId = $row['instructor_id'];
                            $deptId = $row['department_id'];
			            }
                    }
                    else
                    {
                        $query = "SELECT class_id,
                            Class.course_id,
                            Courses.course_name,
                            Courses.instructor_id,
                            Departments.department_name
                            FROM Class
                            JOIN Courses 
                            ON Courses.course_id = Class.course_id
                            JOIN Departments
                            ON Departments.department_id = Courses.department_id
                            WHERE Class.student_id = '$_SESSION[uid]'
                            ORDER BY course_id ASC;";
                        
                        $result = sqlsrv_query($conn, $query);
                        if($result)
                        {
                            while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC))
                            {
                                ?>
                                <tr>
                                    <td> <?php echo $row['class_id'] ?> </td>
                                    <td> <?php echo $row['course_id'] ?> </td>
                                    <td> <?php echo $row['course_name'] ?> </td>
                                    <td> <?php echo $row['instructor_id'] ?> </td>
                                    <td> <?php echo $row['department_name'] ?> </td>
                                    <td>
                                        <button class="btn btn-danger" onclick="deleteData(<?=$row['class_id'] ?>)">
                                            <i class="fa-solid fa-trash" style="color: #ffffff;"></i>
                                        </button>
                                    </td>
                                </tr>
                                <?php
                            }
                        } 
                        else 
                        {
                            echo "Error encounted please try again later...";
                        }
                    }
                    ?>
                    <tr>
                        <td colspan="6"> <a class="btn btn-success" name="enroll" href="enrollment.php" role="button">Enroll</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        </div>
    </div>


</body>
</html>


<script type="text/javascript">
	function deleteData(id)
    {
		window.location.href = 'delete.php?id=' + id;
	}
</script>