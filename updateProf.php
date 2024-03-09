<?php
    include('connect.php');
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $deptId = $_POST['deptId'];

    echo $id;

    $query = "UPDATE Instructors
    SET fname= '$fname' , lname = '$lname' , department_id = '$deptId'
    WHERE instructor_id = $id;";
    $result = sqlsrv_query($conn,$query);
    if($result) {
        ?>
        <script type="text/javascript">
        window.location.href = 'allProf.php';
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
    window.location.href = 'allProf.php';
</script>