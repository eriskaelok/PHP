<?php

include("config.php");

if(isset($_POST['Daftar'])){
    
    $id = $_POST['id'];
    $NIM = $_POST['NIM'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $kelas = $_POST['kelas'];
    $semester = $_POST['semester'];
$sql =" INSERT INTO mahasiswa (id, NIM, nama, jurusan, kelas, semester) VALUE ('$id',' $NIM', '$nama', '$jurusan', '$kelas', '$semester')";
$query = mysqli_query($db, $sql);

if ( $query) {
    header('Location: index.php?status=sukses');
}else{
    header('Location: index.php?status=gagal');}

}else{

    die("akses dilarang...");
}
?>