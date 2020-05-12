<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="index.css">
  <title>Database Mahasiswa STT Pati</title>
</head>
<body>

  <div class="kepala">
    <h1 class="DB">Database Mahasiswa</h1>
    <h3 class="sttp">Sekolah Tinggi Teknik Pati</h3>
  </div>

  <div class="menu">
    <div class="tambah"><a href="form-tambah.php"><button type="button">Data Baru</button></a></div>
    <div class="list"><a href="list-mhsw.php"><button type="button">List Mahasiswa</button></a></div>
    <div class="list"><a href="list-img.php"><button type="button">Foto Kegiatan Mahasiswa</button></a></div>
    <div><a href="logout.php"><button type="button">Logout</button></a></div>


  <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
  <?php endif; ?>
  </div>

  <div class="footer">
    @Zulham Ari Nur Ridhwan
  </div>

</body>
</html>
