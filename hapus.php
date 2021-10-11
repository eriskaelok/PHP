<?php

include("config.php");

if(isset($_GET['id']) ){
    
    $id = $_GET['id'];
    
$sql =" DELETE FROM mahasiswa WHERE id=$id";
$query = mysqli_query($db, $sql);

if ( $query) {
    header('Location: index.php?status=sukses');
}else{
    die('gagal hapus');}

}else{

    die("akses dilarang...");
}
?>