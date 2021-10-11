<html>
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
<body>


    <header>
        <h2> DATA MAHASISWA </h2>
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
            <?php include("config.php"); ?>





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
            