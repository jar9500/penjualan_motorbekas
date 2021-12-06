<?php
include '../../koneksi.php';

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

$query=mysqli_query($koneksi,"INSERT INTO identitas_motor (ID,NoRegistrasi,NamaPemilik,Alamat,NoRangka,NoMesin,
PlatNo,Merk,Type,Model,TahunPembuatan,IsiSilinder,BahanBakar,WarnaTNKB,TahunRegistrasi,NoBPKB,KodeLokasi,MasaBerlakuSTNK) 
VALUES('$ID','$NoRegistrasi','$NamaPemilik','$Alamat','$NoRangka','$NoMesin','$PlatNo','$Merk','$Type','$Model',
'$TahunPembuatan','$IsiSilinder','$BahanBakar','$WarnaTNKB','$TahunRegistrasi','$NoBPKB','$KodeLokasi','$MasaBerlakuSTNK')")
or die(mysqli_error($koneksi));

if($query){
    header("Location: 01_identitas_motor.php");
}else{
    echo"Gagal Input";
}

?>