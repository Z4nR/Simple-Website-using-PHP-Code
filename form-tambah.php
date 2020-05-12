<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="form-tambah.css">
  <title>Database Mahasiswa STT Pati</title>
</head>

<body>
    <div class="kepala">
        <h2>Perbarui Data Mahasiswa</h2>
    </div>

    <div class="form">
    <form action="proses-tambah.php" method="POST">
      <table>
        <tr>
          <td>
              <label for="nim">NIM </label>
          </td>
          <td>
              <input type="text" name="nim" placeholder="masukan nomor induk mahasiswa"/>
          </td>
        </tr>

        <tr>
          <td>
              <label for="nama">Nama </label>
          </td>
          <td>
              <input type="text" name="nama" placeholder="masukan nama lengkap"/>
          </td>
        </tr>

        <tr>
          <td>
              <label for="alamat">Alamat </label>
          </td>
          <td>
              <input type"text" name="alamat"/>
          </td>
        </tr>
      </table>
      <input class="D" type="submit" value="Daftar" name="daftar"/>
      <a href="innerindex.php"><button type="button">Kembali</button></a>
    </form>
    </div>
    <div class="footer">
      @Zulham Ari Nur Ridhwan
    </div>
</body>
</html>
