<?php
    include('connect.php');

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $birthday = $_POST['bday'];
    $pass = $_POST['pass'];
    $hashedPassword = sha1($pass);

    $query = "INSERT INTO Students(fname, lname, bday, pass)
    VALUES ('$fname' , '$lname' , '$birthday' , '$hashedPassword');";
    $result = sqlsrv_query($conn, $query);
    if($result){
        ?>
        <script type="text/javascript">
            window.location.href = 'allStud.php';
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
            window.location.href = 'allStud.php';
        </script>

