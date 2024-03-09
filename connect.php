<?php
    $serverName = "ARA\SQLEXPRESS";
    $connectionOptions = 
    [
        "Database" => "MainDataBase",
        "Uid" => "",
        "PWD" => ""
    ];

    $conn = sqlsrv_connect($serverName, $connectionOptions);

   
?>