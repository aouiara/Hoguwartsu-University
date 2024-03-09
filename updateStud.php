<?php
    include('connect.php');
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $date = $_POST['date'];

    echo $id;

    $query = "UPDATE Students
    SET fname= '$fname' , lname = '$lname' , bday = '$date'
    WHERE student_id = $id;";
    $result = sqlsrv_query($conn,$query);
    if($result) {
        ?>
        <script type="text/javascript">
            alert("Data updated successfully!");
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
    window.location.href = 'allStud.php';

</script>