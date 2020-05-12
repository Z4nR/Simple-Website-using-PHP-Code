<?php
include('config.php');
if(isset($_POST['upload']))
{
    if(!isset($_FILES['image']['tmp_name'])){
        echo '<span style="color:red"><b><u><i>Pilih file gambar</i></u></b></span>';
    }
    else
    {
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_type = $_FILES['image']['type'];
        if ($file_size < 2048000 and ($file_type =='image/jpeg' or $file_type == 'image/png'))
        {
            $image   = addslashes(file_get_contents($_FILES['image']['tmp_name']));
            $keterangan = $_POST['kgt'];
            $sql = "INSERT INTO tb_gambar (img,nama_img,tipe_img,size_img,ket_img) values ('$image','$file_name','$file_type','$file_size','$keterangan')";
            mysqli_query($db, $sql);
            header("location:list-img.php");
        }
        else
        {
            echo '<span style="color:red"><b><u><i>Ukuruan File / Tipe File Tidak Sesuai</i></u></b></span>';
        }
    }
}
?>
