<!DOCTYPE html>
<html lang="en">
<?php 
session_start(); 
?>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<script src="bootstrap/js/bootstrap.min.js"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
<style>
    body {
        font-family: "Open Sans";
        width: 100%;
        height: 100%;
    }

    h1 {
        font-weight: bold;
        text-align: center;
        margin-top: 4%;
    }

    p {
        margin-top: 2%;
        font-size: 16px;
        text-align: center;
    }

    .carousel-item {
        width: 40%;
        height: 40%;
        float: center;
        margin-left: 30%;
    }
    footer{
        width: 100%;
        height: 200px;
        margin-top: 10%;
        background-color: black;
    }
    h4{
        color: white;
        font-weight: bold;
        font-size: small;
    }
</style>
</head>

<body>
<!-- navbar -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a href="index.php"><img src="img/logo.png" style="width:50px; height:50px;"><a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Katalog Motor</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Transaksi</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Kelola User</a>
        </li>
    </ul>
    <?php if (isset($_SESSION["Nama"])) : ?>
        <a href="logout.php" class="btn btn-light float-end">Logout</a>
    <?php else : ?>
        <a href="register.php" class="navbar btn btn-success float-end" >Register</a>
        <a href="login.php" class="btn btn-primary float-end">Login</a>
    <?php endif; ?>
    </div>
</nav>
<!-- header -->
<div class="header">
    <marquee direction="Right">
        <h1>Katalog Identitas Motor Bekas</h1>
    </marquee>
</div>
<!-- body -->
<div class="container">
	<div class="mt-4">
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nama Pemilik</th>
						<th>Merk</th>
						<th>Tipe</th>
						<th>Model</th>
						<th>Tahun Pembuatan</th>
						<th>Isi Silinder</th>
						<th>Warna TNKB</th>
                        <th>Edit/Hapus</th>
					</tr>
				</thead>
				<tbody>
                <?php
                    include 'koneksi.php';
                    $data=mysqli_query($koneksi,"SELECT * FROM Identitas_Motor") or die(mysqli_error($koneksi));
                    foreach($data as $identitasmotor){?>
					<tr>
						<td><?php echo $identitasmotor['ID'];?></td>
						<td><?php echo $identitasmotor['NamaPemilik'];?></td>
						<td><?php echo $identitasmotor['Merk'];?></td>
						<td><?php echo $identitasmotor['Type'];?></td>
						<td><?php echo $identitasmotor['Model'];?></td>
						<td><?php echo $identitasmotor['TahunPembuatan'];?></td>
						<td><?php echo $identitasmotor['IsiSilinder'];?></td>
						<td><?php echo $identitasmotor['WarnaTNKB'];?></td>
						<td>
                            <a href="identitas_motordelete.php?idpasien=<?php echo $identitasmotor['ID']?>" class="btn btn-danger" onclick="return confirm('Anda akan menghapus data ini ?')">Hapus</a> 
                            <a href="identitas_motorupdate.php?idpasien=<?php echo $identitasmotor['ID']?>" class="btn btn-warning">Edit</a>
						</td>
					</tr>
                <?php }
                ?>    
				</tbody>
            </table>
        </div>
    </div>
	<a class="btn btn-success my-6" href="identitas_motorcreate.php" >Tambah Data</a>
</div>