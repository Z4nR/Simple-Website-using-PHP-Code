<?php
include('config.php');
$query = mysqli_query($db,"SELECT * FROM tb_gambar");
?>
<html>
    <head>
        <title>STT Pati</title>
        <link rel="stylesheet" type="text/css" href="img.css">
    </head>
    <body>
      <div class="kepala">
        <h2>Dokumentasi Kegiatan Mahasiswa</h2>
      </div>
      <div class="tabel">
        <table border="0">
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Nama File/Kegiatan</th>
                <th>Keterangan</th>
                <th>Tindakan</th>
            </tr>
            <?php
            $no = 1;
            while($row = mysqli_fetch_array($query))
            {
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><img src="img_view.php?id_img=<?php echo $row['id_img']; ?>" width="100"/></td>
                    <td><?php echo $row['nama_img']; ?></td>
                    <td><?php echo $row['ket_img']; ?></td>
                    <td><a href="hapus-img.php?id_img=<?php echo $row['id_img']; ?>">Delete</a></td>
                </tr>
                <?php
            }
            ?>
        </table>
        <div class="bawah">
        <h3>Total: <?php echo mysqli_num_rows($query) ?></h3>
        <a href="upload.php"><button type="button">Upload Gambar</button></a>
        <a href="innerindex.php"><button type="button">Kembali</button></a>
        </div>
      </div>
      <div class="footer">
        Zulham Ari Nur Ridhwan
      </div>
    </body>
</html>
