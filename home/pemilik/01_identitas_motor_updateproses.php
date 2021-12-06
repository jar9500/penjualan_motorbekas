<?php
include '../../koneksi.php';

$IDLama=$_GET['ID'];
$ID=$_POST['ID'];
$NoRegistrasi=$_POST['NoRegistrasi'];
$NamaPemilik=$_POST['NamaPemilik'];
$Alamat=$_POST['Alamat'];
$NoRangka=$_POST['NoRangka'];
$NoMesin=$_POST['NoMesin'];
$PlatNo=$_POST['PlatNo'];
$Merk=$_POST['Merk'];
$Type=$_POST['Type'];
$Model=$_POST['Model'];
$TahunPembuatan=$_POST['TahunPembuatan'];
$IsiSilinder=$_POST['IsiSilinder'];
$BahanBakar=$_POST['BahanBakar'];
$WarnaTNKB=$_POST['WarnaTNKB'];
$TahunRegistrasi=$_POST['TahunRegistrasi'];
$NoBPKB=$_POST['NoBPKB'];
$KodeLokasi=$_POST['KodeLokasi'];
$MasaBerlakuSTNK=$_POST['MasaBerlakuSTNK'];

$query=mysqli_query($koneksi,"UPDATE identitas_motor SET ID='$ID', NoRegistrasi='$NoRegistrasi', 
NamaPemilik='$NamaPemilik', Alamat='$Alamat',NoRangka='$NoRangka',NoMesin='$NoMesin',PlatNo='$PlatNo',
Merk='$Merk',Type='$Type',Model='$Model',TahunPembuatan='$TahunPembuatan',IsiSilinder='$IsiSilinder',
BahanBakar='$BahanBakar',WarnaTNKB='$WarnaTNKB',TahunRegistrasi='$TahunRegistrasi',NoBPKB='$NoBPKB',
KodeLokasi='$KodeLokasi',MasaBerlakuSTNK='$MasaBerlakuSTNK' WHERE ID='$IDLama' ")
or die(mysqli_error($koneksi));

if($query){
    header("Location: 01_identitas_motor.php");
}else{
    echo"Gagal Input";
}

?>