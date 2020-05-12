<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="form-tambah.css">
  <title>Database Mahasiswa STT Pati</title>
</head>

<body>
    <div class="kepala">
        <h2>Dokumentasi Kegiatan</h2>
    </div>

    <div class="form">
    <form action="proses-upload.php" method="POST" enctype="multipart/form-data">
      <table>

        <tr>
          <td>
              <label for="gambar">Gambar </label>
          </td>
          <td>
              <input type="file" name="image"/>
          </td>
        </tr>

        <tr>
          <td>
              <label for="ket">Keterangan </label>
          </td>
          <td>
              <input type="text" name="kgt"/>
          </td>
        </tr>

      </table>
      <input class="D" type="submit" value="Upload" name="upload"/>
      <a href="list-img.php"><button type="button">Kembali</button></a>
    </form>
    </div>
    <div class="footer">
      Zulham Ari Nur Ridhwan
    </div>
</body>
</html>
