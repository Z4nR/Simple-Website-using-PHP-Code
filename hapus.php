<?php

include("config.php");

if( isset($_GET['id']) ){


    $id = $_GET['id'];


    $sql = "DELETE FROM mahasiswa WHERE id_mhs=$id";
    $query = mysqli_query($db, $sql);


    if( $query ){
        header('Location: list-mhsw.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>
