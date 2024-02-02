<?php
    include('connect.php');
    session_start();

        $uid = $_POST['userId'];
        $_SESSION['uid'] = $uid;
        $pass = $_POST['password'];
 
        $query = "SELECT * FROM Credential WHERE admin_id LIKE '$uid'";
        $result = sqlsrv_query($conn, $query);
       
            if ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) 
            {
                if ($pass == $row['password'])
                {
                ?>
                    <script type="text/javascript">
                         window.location.href = 'admin.php';
                    </script>
                <?php
                }
                else
                {
                ?>
                    <script type="text/javascript">
                         alert("Password Incorect!");
                         window.location.href = 'adminLogin.php';
                    </script>
                <?php
                }
            }
            else
            {
            ?>
                <script type="text/javascript">
                    alert("This is an Administration Login. Make sure to know your Credentials");
                    window.location.href = 'home.php';
                </script>
            <?php
            }
?>
