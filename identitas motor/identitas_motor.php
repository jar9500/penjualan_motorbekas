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
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../style.css">
<script src="../bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
<!-- navbar -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a href="../index.php"><img src="../img/logo.png" class="logo-navbar"><a>
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
        <a href="../logout.php" class="btn btn-light float-end">Logout</a>
    <?php else : ?>
        <a href="../register.php" class="navbar btn btn-success float-end" >Register</a>
        <a href="../login.php" class="btn btn-primary float-end">Login</a>
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
                    include '../koneksi.php';
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

<!-- Footer -->
<footer>
    <h6 class="text-center p-5"> @Copyright - JDRB 2021</h6>
</footer>
</body>

</html>