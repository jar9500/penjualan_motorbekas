<?php
session_start();
include '../koneksi.php';

if (isset($_SESSION["Nama"])) {
    $ID=$_GET['ID'];

    $query=mysqli_query($koneksi,"DELETE from identitas_motor where ID='$ID' ")
    or die(mysqli_error($koneksi));

    if($query){
        header('location:'.$url.'/home/'.$_SESSION['Akses'].'/identitas_motor.php');
    }else{
        echo"Gagal";
    }
}else{
    header("Location:../../login.php");
}

?>