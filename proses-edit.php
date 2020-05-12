<?php

include('config.php');


if(isset($_POST['simpan'])){


    $id = $_POST['id'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];


    $sql = "UPDATE mahasiswa SET nim='$nim', nama_mhs='$nama', alamat_mhs='$alamat' WHERE id_mhs=$id";
    $query = mysqli_query($db, $sql);


    if( $query ) {
        header('Location: list-mhsw.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }

} else {
    die("Akses dilarang...");
}

?>
