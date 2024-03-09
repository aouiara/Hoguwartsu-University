<?php
    include('connect.php');

    $cname = $_POST['cname'];
    $insId = $_POST['insId'];
    $deptId = $_POST['deptId'];

    $query = "INSERT INTO Courses(course_name, instructor_id, department_id)
    VALUES ('$cname' , '$insId' , '$deptId');";
    $result = sqlsrv_query($conn, $query);
    if($result){
        ?>
        <script type="text/javascript">
            window.location.href = 'allcourses.php';
        </script>
        <?php
    } else {
        ?>
        <script type="text/javascript">
            alert("ERROR encounted on saving the data.");
        </script>
        <?php
    }
?>

<script type="text/javascript">
            window.location.href = 'allcourses.php';
        </script>

