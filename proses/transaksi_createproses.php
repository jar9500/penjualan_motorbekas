<?php
include '../../koneksi.php';

$ID=$_POST['ID'];
$NoRegistrasi=$_POST['NoRegistrasi'];
$NamaPemilik=$_POST['NamaPemilik'];

$query=mysqli_query($koneksi,"INSERT INTO identitas_motor (ID,NoRegistrasi,NamaPemilik) 
VALUES('$ID','$NoRegistrasi','$NamaPemilik')")
or die(mysqli_error($koneksi));

if($query){
    header("Location: 02_transaksi.php");
}else{
    echo"Gagal Input";
}

?>