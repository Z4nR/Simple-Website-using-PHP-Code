<?php
include('config.php');
if(isset($_GET['id_img']))
{
    $query = mysqli_query($db,"SELECT * from tb_gambar where id_img='".$_GET['id_img']."'");
    $row = mysqli_fetch_array($query);
    header("Content-type: " . $row["tipe_img"]);
    echo $row["img"];
}
else
{
    header('location:list-img.php');
}
?>
