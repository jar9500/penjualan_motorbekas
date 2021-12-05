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
            <a class="nav-link" href="identitas_motor.php">Katalog Motor</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Transaksi</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../user/user.php">Kelola User</a>
        </li>
    </ul>
    </div>
    <?php if (isset($_SESSION["Nama"])) : ?>
        <p class="h6 text-white mr-5">Halo,<?php echo $_SESSION["Nama"] ?></p>
        <a href="../logout.php" class="btn btn-light buttonnavbar">Logout</a>
    <?php else : ?>
        <a href="../login.php" class="btn btn-light buttonnavbar">Login</a>
    <?php endif; ?>
</nav>
<!-- header -->
<div class="header">
    <h1 class="mt-5">Katalog Identitas Motor Bekas</h1>
</div>
<!-- body -->
<div class="container">
	<div class="mt-4">
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th>ID</th>
						<th>No Reg.</th>
						<th>Nama Pemilik</th>
						<th>Alamat</th>
						<th>No Rangka</th>
						<th>No Mesin</th>
						<th>Plat</th>
						<th>Merk</th>
						<th>Tipe</th>
						<th>Model</th>
						<th>Tahun Pembuatan</th>
						<th>Isi Silinder</th>
						<th>Bahan Bakar</th>
						<th>Warna TNKB</th>
						<th>Tahun Reg.</th>
						<th>BPKB</th>
						<th>Kode Lokasi</th>
						<th>Masa STNK</th>
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
						<td><?php echo $identitasmotor['NoRegistrasi'];?></td>
						<td><?php echo $identitasmotor['NamaPemilik'];?></td>
						<td><?php echo $identitasmotor['Alamat'];?></td>
						<td><?php echo $identitasmotor['NoRangka'];?></td>
						<td><?php echo $identitasmotor['NoMesin'];?></td>
						<td><?php echo $identitasmotor['PlatNo'];?></td>
						<td><?php echo $identitasmotor['Merk'];?></td>
						<td><?php echo $identitasmotor['Type'];?></td>
						<td><?php echo $identitasmotor['Model'];?></td>
						<td><?php echo $identitasmotor['TahunPembuatan'];?></td>
						<td><?php echo $identitasmotor['IsiSilinder'];?></td>
						<td><?php echo $identitasmotor['BahanBakar'];?></td>
						<td><?php echo $identitasmotor['WarnaTNKB'];?></td>
						<td><?php echo $identitasmotor['TahunRegistrasi'];?></td>
						<td><?php echo $identitasmotor['NoBPKB'];?></td>
						<td><?php echo $identitasmotor['KodeLokasi'];?></td>
						<td><?php echo $identitasmotor['MasaBerlakuSTNK'];?></td>
						<td>
                            <a href="identitas_motor_delete.php?ID=<?php echo $identitasmotor['ID']?>" class="btn btn-danger" onclick="return confirm('Anda akan menghapus data ini ?')">Hapus</a> 
                            <a href="identitas_motor_update.php?ID=<?php echo $identitasmotor['ID']?>" class="btn btn-warning">Edit</a>
						</td>
					</tr>
                <?php }
                ?>    
				</tbody>
            </table>
        </div>
    </div>
	<a class="btn btn-success my-4" href="identitas_motor_create.php" >Tambah Data</a>
</div>

<!-- Footer -->
<footer>
    <h6 class="text-center p-5"> @Copyright - JDRB 2021</h6>
</footer>
</body>

</html>