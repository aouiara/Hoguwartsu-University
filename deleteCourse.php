<?php
    include('connect.php');
    $id = $_GET['id'];

    echo $id;

    $query = "DELETE FROM Courses WHERE course_id = $id;";
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
            alert("This Course is assigned to an Instructor.");
        </script>
        <script type="text/javascript">
            window.location.href = 'allcourses.php';
        </script>
        <?php
    }
?>
