<?php
include '../koneksi.php';

$IDUser=$_POST['IDUser'];
$Nama=$_POST['Nama'];
$Password=(md5($_POST['Password']));;
$Hak_Akses=$_POST['Hak_Akses'];
$Create_Date=date('Y-m-d');
$Manager=$_POST['Manager'];

$query=mysqli_query($koneksi,"UPDATE user SET Nama='$Nama', 
Password='$Password', Hak_Akses='$Hak_Akses',Create_Date='$Create_Date',Manager='$Manager'
WHERE IDUser='$IDUser' ")
or die(mysqli_error($koneksi));

if($query){
    header("Location: user.php");
}else{
    echo"Gagal Input";
}

?>