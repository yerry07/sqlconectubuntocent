<?php
    $serverName = "104.41.2.231,1433";
    $connectionOptions = array(
        "Database" => "PruebaMistr",
        "Uid" => "sa",
        "PWD" => "Hdtingw145eyf73"
    );
    //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);
    if($conn)
        echo "Te conectaste de manera exitosa al Sevidor Centos!"
?>