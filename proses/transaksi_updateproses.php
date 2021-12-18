<?php
session_start();
include '../koneksi.php';

$IdTrskLama=$_GET['IdTrsk'];
$IdTrsk=$_POST['IdTrsk'];
$Tgl_Trsk=$_POST['Tgl_Trsk'];
$Id_Cust=$_POST['Id_Cust'];;
$Id_Kendaraan=$_POST['Id_Kendaraan'];
$Harga_Jual=$_POST['Harga_Jual'];
$Harga_Jual_Real=$_POST['Harga_Jual_Real'];


$query=mysqli_query($koneksi,"UPDATE transaksi_penjualan SET IdTrsk='$IdTrsk', Tgl_Trsk='$Tgl_Trsk', 
Id_Cust='$Id_Cust', Id_Kendaraan='$Id_Kendaraan',Harga_Jual='$Harga_Jual',Harga_Jual_Real='$Harga_Jual_Real'
WHERE IdTrsk='$IdTrskLama' ")
or die(mysqli_error($koneksi));

if($query){
    header('location:'.$url.'/home/'.$_SESSION['Akses'].'/transaksi.php');
}else{
    echo"Gagal Input";
}

?>