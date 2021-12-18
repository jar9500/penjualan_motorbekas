<?php
session_start();
include '../koneksi.php';

if (isset($_SESSION["Nama"])) {
    $IdTrsk=$_GET['IdTrsk'];

    $query=mysqli_query($koneksi,"DELETE from transaksi_penjualan where IdTrsk='$IdTrsk' ")
    or die(mysqli_error($koneksi));

    if($query){
        header('location:'.$url.'/home/'.$_SESSION['Akses'].'/transaksi.php');
    }else{
        echo"Gagal";
    }
}else{
    header("Location:../login.php");
}

?>