<?php
    include('connect.php');
    $id = $_GET['id'];

    echo $id;

    $query = "DELETE FROM Instructors WHERE instructor_id = $id;";
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
            alert("This Instructor is assigned to a course.");
        </script>
        <script type="text/javascript">
            window.location.href = 'allProf.php';
        </script>
        <?php
    }
?>
