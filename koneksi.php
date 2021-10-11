<?php
    $conn = mysqli_connect("localhost", "root", "", "db_coba");

    if($conn){
        echo "koneksi berhasil";

    }else{
        echo "koneksi gagal !!!" . mysqli_connect_error();
        die();
    }
    ?>