<?php

include("config.php");

if( isset($_POST['simpan'])){
    
    $id = $_POST['id'];
    $NIM = $_POST['NIM'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $kelas = $_POST['kelas'];
    $semester = $_POST['semester'];
$sql =" UPDATE mahasiswa SET id= '$id', NIM= '$NIM', nama= '$nama', jurusan= '$jurusan', kelas= '$kelas', semester= '$semester' WHERE id=$id";
$query = mysqli_query($db, $sql);

if ( $query) {
    header('Location: list.php');
}else{
    die("gagal menyimpan perubahan");}

}else{

    die("akses dilarang...");
}
?>