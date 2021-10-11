<?php

include("config.php");

if( !isset($_GET['id']) ){
    header('Location: list.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM mahasiswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1){
    die("data tidak ditemukan...");
}
?>

<html>

<head>
    <title> Data Mahasisa</title>
    <style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: #666;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 30%;
  height: 300px; /* only for demonstration, should be removed */
  background: white;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 70%;
  background-color: white;
  height: 300px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section::after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>
    <header>
        <h2>Data Mahasiswa</h2>
    </header>
    <section>
    <nav>
        <?php if (isset($_GET['status'])) : ?>
            <p>
                <?php
                if ($_GET['status'] == 'sukses') {
                    echo "Pendaftaran Berhasil";
                } else {
                    echo "Pendaftaran gagal";
                }
                ?>
                

            </p>
           
        <?php endif; ?>
        <ul>
            <li><a href="Daftar.php"> Daftar Baru </a></li>
            <li><a href="list.php">List</a></li>
            </ul>
           

            </nav>
            <article>
    <form action="edits.php" method="POST">
    <fieldset>
        <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />

        <P>
            <label for="id">id: </label>
            <input type="text" name="id"
            placeholder="isikan id" value="<?php echo $siswa['id'] ?>" />
        </P>
        <P>
            <label for="nim">NIM: </label>
            <input type="text" name="nim"
            placeholder="isikan nim" value="<?php echo $siswa['NIM'] ?>" />
        </P>
        <P>
            <label for="nama">nama: </label>
            <input type="text" name="nama"
            placeholder="isikan nama" value="<?php echo $siswa['nama'] ?>"/>
        </P>
        <P>
            <label for="jurusan">jurusan: </label>
            <input type="text" name="jurusan"
            placeholder="isikan jurusan" value="<?php echo $siswa['jurusan'] ?>" />
        </P>
        <P>
            <label for="kelas">kelas: </label>
            <input type="text" name="kelas"
            placeholder="isikan kelas" value="<?php echo $siswa['kelas'] ?>"/>
        </P>
        <P>
            <label for="semester">semester: </label>
            <input type="text" name="semester"
            placeholder="isikan semester" value="<?php echo $siswa['semester'] ?>"/>
        </P>
        <p>
            <input type="submit" value="simpan" name="simpan" />
        </p>
        </fieldset>
    </form>
    </article>
</section>
    </body>
    </html>
    
   