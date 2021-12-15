<?php
session_start();
include '../koneksi.php';

if (isset($_SESSION["Nama"])) {
    $IDUser=$_GET['IDUser'];

    $query=mysqli_query($koneksi,"DELETE from user where IDUser='$IDUser' ")
    or die(mysqli_error($koneksi));

    if($query){
        header('location:'.$url.'/home/'.$_SESSION['Akses'].'/user.php');
    }else{
        echo"Gagal";
    }
}else{
    header("Location:../../login.php");
}

?>