<?php

include("config.php");


if(isset($_POST['daftar'])){

    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];

    $sql = "INSERT INTO mahasiswa (nim, nama_mhs, alamat_mhs) VALUE ('$nim', '$nama', '$alamat')";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: innerindex.php?status=sukses');
    } else{
        header('Location: innerindex.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>
