<?php
    include('connect.php');
  
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $birthday = $_POST['bday'];
    $pass = $_POST['pass'];
    $hashedPassword = sha1($pass);
    
   
        if (ctype_space($fname) || ctype_space($lname))
        {
            ?>
            <script type="text/javascript">
                alert("Cannot process spaces Register again");
            </script>
            <script type="text/javascript">
                window.location.href = 'StudentRegister.php';
            </script>
            <?php
        }
        else
        {
            $query = "INSERT INTO Students(fname, lname, bday, pass)
            VALUES ('$fname' , '$lname' , '$birthday' , '$hashedPassword');";

            $result = sqlsrv_query($conn, $query);

            if ($result)
            {
                ?>
                <script type="text/javascript">
                    window.location.href = 'registeredStudData.php';
                </script>
                <?php
            }
            else
            {
                echo "Something went wrong";
            }

        }
        

?>

