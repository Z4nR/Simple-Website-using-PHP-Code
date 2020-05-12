<?php

include("config.php");


if( !isset($_GET['id']) ){
    header('Location: list-mhsw.php');
}


$id = $_GET['id'];


$sql = "SELECT * FROM mahasiswa WHERE id_mhs=$id";
$query = mysqli_query($db, $sql);
$mahasiswa = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Database Mahasiswa STT Pati</title>
    <link rel="stylesheet" type="text/css" href="edit.css">
</head>

<body>
    <div class="kepala">
      <h2>Perbarui Datamu</h2>
    </div>

    <div class="form">
      <form action="proses-edit.php" method="POST">

        <table>
          <tr>
            <td>
              <input type="hidden" name="id" value="<?php echo $mahasiswa['id_mhs'] ?>" />
            </td>
          </tr>
          <tr>
            <td>
              <label for="nim">NIM </label>
            </td>
            <td>
              <input type="text" name="nim" placeholder="masukan nomor induk mahasiswa" value="<?php echo $mahasiswa['nim'] ?>" />
            </td>
          </tr>
          <tr>
            <td>
              <label for="nama">Nama </label>
            </td>
            <td>
              <input type="text" name="nama" placeholder="masukkan nama lengkap" value="<?php echo $mahasiswa['nama_mhs'] ?>" />
            </td>
          </tr>
          <tr>
            <td>
              <label for="alamat">Alamat </label>
            </td>
            <td>
              <input type="text" name="alamat" value="<?php echo $mahasiswa['alamat_mhs'] ?>"/>
            </td>
          </tr>
        </table>
        <input class="S" type="submit" value="Simpan" name="simpan"/>
        <a href="list-mhsw.php"><button type="button">Batal</button></a>
      </form>
    </div>
    <div class="footer">
      @Zulham Ari Nur Ridhwan
    </div>

    </body>
</html>
