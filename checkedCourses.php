<?php 
    include ("connect.php");  
    session_start();

    $uid = $_SESSION['uid'];

        if(isset($_POST['sub']))
        {
            if(is_null($_POST['courseId'] ))
            {
                ?> 
                    <script type="text/javascript">
                        alert("Check the boxes First!");
                    </script>
                    <script type="text/javascript">
                        window.location.href = 'courses.php';
                    </script> 
                    <?php
            }
            else
            {
                $coursesId = $_POST['courseId'];  
            
                 
                foreach ($coursesId as $checked)
                {
                    $query = "INSERT INTO Class (student_id, course_id) 
                    VALUES('$uid', '$checked');"; 
                    $result = sqlsrv_query($conn, $query);
                    if($result)  
                    { 
                        ?> 
                            <script type="text/javascript">
                                alert("Successfully Enrolled!");
                            </script>
                            <script type="text/javascript">
                                window.location.href = 'dashboard.php';
                            </script> 
                        <?php 
                    }  
                    else  
                    {  
                        ?> 
                            <script type="text/javascript">
                                alert("Something Went wrong. Try Again");
                            </script>
                            <script type="text/javascript">
                                window.location.href = 'courses.php';
                            </script> 
                        <?php 
                    } 
                }
            }
            
        }
            
            
         
        
?>
        