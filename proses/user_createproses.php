<?php
session_start();
include '../koneksi.php';

$IDUser=$_POST['IDUser'];
$Nama=$_POST['Nama'];
$Password=(md5($_POST['Password']));;
$Hak_Akses=$_POST['Hak_Akses'];
$Create_Date=date('Y-m-d');
$Manager=$_POST['Manager'];


$query=mysqli_query($koneksi,"INSERT INTO user (IDUser,Nama,Password,Hak_Akses,Create_Date,Manager) 
VALUES('$IDUser','$Nama','$Password','$Hak_Akses','$Create_Date','$Manager')")
or die(mysqli_error($koneksi));

if($query){
    header('location:'.$url.'/home/'.$_SESSION['Akses'].'/user.php');
}else{
    echo"Gagal Input";
}

?>