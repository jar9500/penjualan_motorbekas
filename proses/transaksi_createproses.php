<?php
session_start();
include '../koneksi.php';

$IdTrsk=$_POST['IdTrsk'];
$Tgl_Trsk=$_POST['Tgl_Trsk'];
$Id_Cust=$_POST['Id_Cust'];;
$Id_Kendaraan=$_POST['Id_Kendaraan'];
$Harga_Jual=$_POST['Harga_Jual'];
$Harga_Jual_Real=$_POST['Harga_Jual_Real'];


$query=mysqli_query($koneksi,"INSERT INTO transaksi_penjualan 
(IdTrsk,Tgl_Trsk,Id_Cust,Id_Kendaraan,Harga_Jual,Harga_Jual_Real) 
VALUES('$IdTrsk','$Tgl_Trsk','$Id_Cust','$Id_Kendaraan','$Harga_Jual','$Harga_Jual_Real')")
or die(mysqli_error($koneksi));

if($query){
    header('location:'.$url.'/home/'.$_SESSION['Akses'].'/transaksi.php');
}else{
    echo"Gagal Input";
}

?>