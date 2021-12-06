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

	// cek jika user login sebagai pemilik
	if($data['Hak_Akses']=="Pemilik"){

		// buat session login dan username
		$_SESSION['Nama'] = $Nama;
		$_SESSION['Hak_Akses'] = "Pemilik";
		// alihkan ke halaman dashboard admin
		header("location:home/pemilik/01_index.php");

	// cek jika user login sebagai Teller
	}else if($data['Hak_Akses']=="Teller"){
		// buat session login dan username
		$_SESSION['Nama'] = $Nama;
		$_SESSION['Hak_Akses'] = "Teller";
		// alihkan ke halaman dashboard pegawai
		header("location:home/teller/02_index.php");

	// cek jika user login sebagai Customer
	}else if($data['Hak_Akses']=="Customer"){
		// buat session login dan username
		$_SESSION['Nama'] = $Nama;
		$_SESSION['Hak_Akses'] = "Customer";
		// alihkan ke halaman dashboard pengurus
		header("location:home/customer/04_index.php");

    }else if($data['Hak_Akses']=="Teknisi"){
		// buat session login dan username
		$_SESSION['Nama'] = $Nama;
		$_SESSION['Hak_Akses'] = "Teknisi";
		// alihkan ke halaman dashboard pengurus
		header("location:home/teknisi/03_index.php");

	}else{

		// alihkan ke halaman login kembali
		header("location:../index.php?pesan=gagal");
	}	
}else{
	header("location:../index.php?pesan=gagal");
}

?>