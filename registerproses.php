<?php
include 'koneksi.php';

$Nama=$_POST['Nama'];
$Password=(md5($_POST['Password']));;
$Hak_Akses=$_POST['Hak_Akses'];
$Create_Date=date('Y-m-d');
$Manager=$_POST['Manager'];


$query=mysqli_query($koneksi,"INSERT INTO user (Nama,Password,Hak_Akses,Create_Date,Manager) 
VALUES('$Nama','$Password','$Hak_Akses','$Create_Date','$Manager')")
or die(mysqli_error($koneksi));

if($query){
    header("Location: login.php");
}else{
    echo"Gagal Input";
}

?>