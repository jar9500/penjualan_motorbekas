<?php
session_start();

include 'koneksi.php';
$Nama=$_POST['Nama'];
$Password=$_POST['Password'];
$query=mysqli_query($koneksi,"SELECT * FROM user WHERE Nama='$Nama' AND Password=md5('$Password')")
or die(mysqli_error($koneksi));

if ($data=mysqli_fetch_array($query)){
    $_SESSION["Nama"]=$data["Nama"];
    $_SESSION["alert"]="BERHASIL LOGIN";
    header("Location:index.php");
}else{
    $_SESSION["alert"]="Username/Password Salah";
    header("Location:login.php");
}
?>