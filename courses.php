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
                            <a class="nav-link" href="dashboard.php">Back</a>
						</li>
					</ul>
            </div>
        </nav> 
        <div class="col">
            <form action="checkedCourses.php" method="POST">
                <table class="table table-success table-striped table-borderless table-hover">
                    <thead>
                        <th>Check items</th>
                        <th>Course ID</th>
                        <th>Course Name</th>
                    </thead>
                    <tbody>
                        <tr>
                        <td><input class="form-check-input mt-0" type="checkbox" name="courseId[]" value="100" onclick="enableBtn()"></td>  
                        <td>100</td>
                        <td>Mobile Programming</td>
                        <tr>
                        <td><input class="form-check-input mt-0" type="checkbox" name="courseId[]" value="101" onclick="enableBtn()"></td>  
                        <td>101</td>
                        <td>Advanced Web Programming</td>
                        </tr>
                        <tr>
                        <td><input class="form-check-input mt-0" type="checkbox" name="courseId[]" value="102" onclick="enableBtn()"></td>  
                        <td>102</td>
                        <td>Design and Animation</td>
                        </tr>
                        <tr>
                        <td><input class="form-check-input mt-0" type="checkbox" name="courseId[]" value="103" onclick="enableBtn()"></td>  
                        <td>103</td>
                        <td>Interactivity and Realities</td>
                        </tr>
                        <tr>
                        <td><input class="form-check-input mt-0" type="checkbox" name="courseId[]" value="104" onclick="enableBtn()"></td>  
                        <td>104</td>
                        <td>Web Development</td>
                        </tr>
                        <tr>
                        <td><input class="form-check-input mt-0" type="checkbox" name="courseId[]" value="105" onclick="enableBtn()"></td>  
                        <td>105</td>
                        <td>Algorithms and Complexity</td>
                        </tr>
                        <tr>
                        <td><input class="form-check-input mt-0" type="checkbox" name="courseId[]" value="106" onclick="enableBtn()"></td>  
                        <td>106</td>
                        <td>College Physics</td>
                        </tr>
                        <tr>
                        <td><input class="form-check-input mt-0" type="checkbox" name="courseId[]" value="107" onclick="enableBtn()"></td>  
                        <td>107</td>
                        <td>Software Engineering</td>
                        </tr>
                        <tr>
                        <td><input class="form-check-input mt-0" type="checkbox" name="courseId[]" value="108" onclick="enableBtn()"></td>  
                        <td>108</td>
                        <td>Automata Theory & Formal Languages</td>
                        </tr>
                        <tr>
                        <td><input class="form-check-input mt-0" type="checkbox" name="courseId[]" value="109" onclick="enableBtn()"></td>  
                        <td>109</td>
                        <td>Programming Languages</td>
                        </tr>
                        <tr>        
                        <td> <input type="submit" name="sub" class="btn btn-success"></td>
                        <td> <button type="button"  class="btn btn-success" onclick="checkAll()">Select All</td>
                        <td> <button type="button"  class="btn btn-success" onclick="uncheckAll()">Clear</td>
                        </tr>  
                    </tbody>    
                </table>
                
            </div>
            </div>
            <script type="text/javascript">
                function checkAll()
                {
                    var items = document.getElementsByName('courseId[]');
                    for (var i = 0; i < items.length; i++) 
                    {
                        if (items[i].type == 'checkbox')
                            items[i].checked = true;
                    }
                }
                function uncheckAll()
                {
                    var items = document.getElementsByName('courseId[]');
                    for (var i = 0; i < items.length; i++) 
                    {
                        if (items[i].type == 'checkbox')
                            items[i].checked = false;
                    }
                }
            </script>
        </form>
    </div>


    


</body>
</html>

   