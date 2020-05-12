<?php
if(isset($_GET['id_img']))
{
    include('config.php');
    $id = $_GET['id_img'];
    $query = mysqli_query($db,"DELETE from tb_gambar where id_img='$id'");
}
header('location:list-img.php');
?>
