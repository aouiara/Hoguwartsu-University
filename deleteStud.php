<?php
    include('connect.php');
    $id = $_GET['id'];

    echo $id;

    $query = "DELETE FROM Students WHERE student_id = $id;";
    $result = sqlsrv_query($conn,$query);
    if($result) {
        ?>
        <script type="text/javascript">
            window.location.href = 'allStud.php';
        </script>
        <?php
    } else {
        ?>
        <script type="text/javascript">
            alert("This student has enrolled courses.");
        </script>
        <script type="text/javascript">
            window.location.href = 'allStud.php';
        </script>
        <?php
    }
?>
