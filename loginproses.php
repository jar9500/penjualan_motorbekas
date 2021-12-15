<?php

// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$Nama = $_POST['Nama'];
$Password = $_POST['Password'];


// menyeleksi data user dengan username dan password yang sesuai
$query = mysqli_query($koneksi,"SELECT * FROM user WHERE Nama='$Nama' AND Password=md5('$Password')")
or die(mysqli_error($koneksi));
// menghitung jumlah data yang ditemukan

$cek = mysqli_num_rows($query);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($query);
	$_SESSION['nama_user'] = $data['Nama'];
    $_SESSION['Akses']     = $data['Hak_Akses'];

	// cek jika user login sebagai pemilik
	if($data['Hak_Akses']=="Pemilik"){
		// buat session login dan username
		$_SESSION['Nama'] = $Nama;
		$_SESSION['Pemilik'] = TRUE;

	// cek jika user login sebagai Teller
	}else if($data['Hak_Akses']=="Teller"){
		// buat session login dan username
		$_SESSION['Nama'] = $Nama;
		$_SESSION['Teller'] = TRUE;

	// cek jika user login sebagai Customer
	}else if($data['Hak_Akses']=="Customer"){
		// buat session login dan username
		$_SESSION['Nama'] = $Nama;
		$_SESSION['Customer'] = TRUE;

    }else if($data['Hak_Akses']=="Teknisi"){
		// buat session login dan username
		$_SESSION['Nama'] = $Nama;
		$_SESSION['Teknisi'] = TRUE;

	}
	header('location:'.$url.'/home/'.$_SESSION['Akses'].'/index.php');

}else{
	echo "<script>alert('Nama atau Password Tidak Terdaftar !')
	history.back(self)</script>";
}

?>