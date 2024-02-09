<?php
    $serverName = "LAPTOP-A5SDNGP9";
    $connectionOptions = [
        "Database" => "InbillaTrading",
        "Uid" => "",
        "PWD" => ""
    ];

    $conn = sqlsrv_connect($serverName, $connectionOptions);

    if($conn == false){
        die(print_r(sqlsrv_errors(), true));
    } else {
    }

?>