<?php
session_start();
include '../koneksi.php';

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
$Gambar_Motor = $_FILES['Gambar_Motor']['name'];
$Tgl_Beli=$_POST['Tgl_Beli'];
$Harga_Beli=$_POST['Harga_Beli'];
$Tgl_Jual=$_POST['Tgl_Jual'];
$Harga_Jual=$_POST['Harga_Jual'];

//cek dulu jika ada gambar produk jalankan coding ini
if($Gambar_Motor != "") {
    $ekstensi_diperbolehkan = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
    $x = explode('.', $Gambar_Motor); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['Gambar_Motor']['tmp_name'];   
    $angka_acak  = rand(1,999); //angka acak untuk menghindari kesamaan nama gambar
    $gambar_motor_baru = $angka_acak.'-'.$Gambar_Motor; //menggabungkan angka acak dengan nama file sebenarnya
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
        move_uploaded_file($file_tmp, '../img/identitas_motor/'.$gambar_motor_baru); //memindah file gambar ke folder gambar

        $query="INSERT INTO identitas_motor (ID,NoRegistrasi,NamaPemilik,Alamat,NoRangka,NoMesin,
        PlatNo,Merk,Type,Model,TahunPembuatan,IsiSilinder,BahanBakar,WarnaTNKB,TahunRegistrasi,NoBPKB,KodeLokasi,MasaBerlakuSTNK,Gambar_Motor,Tgl_Beli,Harga_Beli,Tgl_Jual,Harga_Jual) 
        VALUES('$ID','$NoRegistrasi','$NamaPemilik','$Alamat','$NoRangka','$NoMesin','$PlatNo','$Merk','$Type','$Model',
        '$TahunPembuatan','$IsiSilinder','$BahanBakar','$WarnaTNKB','$TahunRegistrasi','$NoBPKB','$KodeLokasi','$MasaBerlakuSTNK','$gambar_motor_baru',
        '$Tgl_Beli','$Harga_Beli','$Tgl_Jual','$Harga_Jual')";
        $sql = mysqli_query($koneksi, $query);
        // periska query apakah ada error
        if(!$sql){
            die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
            " - ".mysqli_error($koneksi));
            } else {
            //Jika berhasil kembali kehalaman awal
            header('location:'.$url.'/home/'.$_SESSION['Akses'].'/identitas_motor.php');
        }
    } else {     
    //jika file ekstensi tidak jpg dan png maka akan disuruh menginput kembali
    header('location:'.$url.'/home/'.$_SESSION['Akses'].'/identitas_motor_create.php');
    }
}
?>