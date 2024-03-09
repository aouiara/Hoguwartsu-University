<?php
    include('connect.php');
    session_start();
  
        $uid = $_POST['userId'];
        $_SESSION['uid'] = $uid;
        $pass = $_POST['password'];
        $hashedPassword = sha1($pass);
 
        $query = "SELECT * FROM Students WHERE student_id = $uid";
        $result = sqlsrv_query($conn, $query);
       
            if ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) 
            {
                if ($hashedPassword== $row['pass'])
                {
                ?>
                    <script type="text/javascript">
                         window.location.href = 'dashboard.php';
                    </script>
                <?php
                }
                else
                {
                ?>
                    <script type="text/javascript">
                         window.location.href = 'LoginWrongPass.php';
                    </script>
                <?php
                }
            }
            else
            {
            ?>
                <script type="text/javascript">
                    alert("User Id not Found. Register First");
                </script>
                <script type="text/javascript">
                    window.location.href = 'StudentRegister.php';
                </script>
            <?php
            }  
?>
