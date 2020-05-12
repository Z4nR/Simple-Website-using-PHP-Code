<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>STT Pati</title>
    <link rel="stylesheet" type="text/css" href="mhsw.css">
</head>

<body>
    <div class="kepala">
      <h2>Database Mahasiswa</h2>
    </div>
    <div class="tabel">
      <table >
      <thead>
          <tr>
              <th>NIM</th>
              <th>Nama</th>
              <th>Alamat</th>
              <th>Tindakan</th>
          </tr>
      </thead>
      <tbody>

          <?php
          $sql = "SELECT * FROM mahasiswa";
          $query = mysqli_query($db, $sql);

          while($mahasiswa = mysqli_fetch_array($query)){
              echo "<tr>";

              echo "<td>".$mahasiswa['nim']."</td>";
              echo "<td>".$mahasiswa['nama_mhs']."</td>";
              echo "<td>".$mahasiswa['alamat_mhs']."</td>";

              echo "<td>";
              echo "<a href='edit.php?id=".$mahasiswa['id_mhs']."'>Edit</a>";
              echo "<a href='hapus.php?id=".$mahasiswa['id_mhs']."'>Hapus</a>";
              echo "</td>";

              echo "</tr>";
          }
          ?>

      </tbody>
      </table>
      <div class="bawah">
      <h3>Total: <?php echo mysqli_num_rows($query) ?></h3>
      <a href="innerindex.php"><button type="button">Kembali</button></a>
    </div>
    </div>
    <div class="footer">
      @Zulham Ari Nur Ridhwan
    </div>
</body>
</html>
