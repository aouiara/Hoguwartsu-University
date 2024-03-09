<?php
    include('connect.php');
    
    $id = $_POST['id'];
    $cname = $_POST['cname'];
    $insId = $_POST['insId'];
    $deptId = $_POST['deptId'];

    echo $id;

    $query = "UPDATE Courses
    SET course_name= '$cname' , instructor_id = '$insId' , department_id = '$deptId'
    WHERE course_id = $id;";
    $result = sqlsrv_query($conn,$query);
    if($result) {
        ?>
        <script type="text/javascript">
            window.location.href = 'allcourses.php';
        </script>
        <?php
    } else {
        ?>
        <script type="text/javascript">
            alert("Error encountered, try again...");
        </script>
        <?php
    }
?>

<script type="text/javascript">
    window.location.href = 'allcourses.php';
</script>