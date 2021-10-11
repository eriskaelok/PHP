<?php

    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "db_coba";

    $db = mysqli_connect($server, $user, $password, $database);

    if( !$db){
        die("gagal terhubung dengan database: " . mysqli_connect_error());

    }

    ?>