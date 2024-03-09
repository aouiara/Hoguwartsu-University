<?php
    include('connect.php');

    $id = $_GET['id'];

    echo $id;

    $query = "DELETE FROM Class WHERE class_id = $id;";
    $result = sqlsrv_query($conn,$query);
    if($result) {
        ?>
        <script type="text/javascript">
            alert("Data deleted successfully!");
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
    window.location.href = 'courseReg.php';
</script>