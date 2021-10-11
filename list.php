<?php include("config.php"); ?>

<html>
<head>
    <title>Data Mahasiswa</title>
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
table {
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
        }
        th {
            background-color: grey;
            color: white;
        }
    </style>
</head>


<body>
    <header>
        <h2> Mahasiswa yang sudah mendaftar </h2>
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
            <li><a href="daftar.php"> [+] Tambah Baru </a><li>
            </ul>
           

            </nav>

            <article>

    <br>

    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Kelas</th>
                <th>Semester</th>
                <th>Aksi</th>
            </tr>
        <thead>
        <tbody>

            <?php
            $sql = "SELECT * FROM mahasiswa";
            $query = mysqli_query($db, $sql);

            while($siswa = mysqli_fetch_array($query)){
                echo " <tr> ";

                echo "<td>".$siswa['id']."</td>";
                echo "<td>".$siswa['NIM']."</td>";
                echo "<td>".$siswa['nama']."</td>";
                echo "<td>".$siswa['jurusan']."</td>";
                echo "<td>".$siswa['kelas']."</td>";
                echo "<td>".$siswa['semester']."</td>";
                

                echo "<td>";
                echo "<a href='edit.php?id=".$siswa['id']."'> edit </a> | ";
                echo "<a href='hapus.php?id=".$siswa['id']."'> hapus </a>";
                echo "</td>";

                echo "</tr";
    

            }

        ?>

        </tbody>
        </table>

        <p>Total : <?php echo mysqli_num_rows($query) ?></p>
        </article>
</section>
        </body>
        </html>





            



