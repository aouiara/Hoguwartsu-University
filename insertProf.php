<?php
    include('connect.php');

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $deptId = $_POST['deptId'];

    $query = "INSERT INTO Instructors(fname, lname, department_id)
    VALUES ('$fname' , '$lname' , '$deptId');";
    $result = sqlsrv_query($conn, $query);
    if($result){
        ?>
        <script type="text/javascript">
            window.location.href = 'allProf.php';
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
            window.location.href = 'allProf.php';
        </script>

