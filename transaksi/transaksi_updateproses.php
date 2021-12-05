<?php
include '../koneksi.php';

$IDLama=$_GET['ID'];
$ID=$_POST['ID'];
$NoRegistrasi=$_POST['NoRegistrasi'];
$NamaPemilik=$_POST['NamaPemilik'];

$query=mysqli_query($koneksi,"UPDATE identitas_motor SET ID='$ID', NoRegistrasi='$NoRegistrasi', 
NamaPemilik='$NamaPemilik' WHERE ID='$IDLama' ")
or die(mysqli_error($koneksi));

if($query){
    header("Location: transaksi.php");
}else{
    echo"Gagal Input";
}

?>