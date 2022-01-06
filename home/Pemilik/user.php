<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
if( !isset($_SESSION['Pemilik']) )
{
	header('location:../'.$_SESSION['Akses'].'/index.php');
	exit();
}
?>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Halaman User</title>
<link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../../style.css">
<script src="../../bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
<!-- navbar -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a href="index.php"><img src="../../img/logo.png" class="logo-navbar"><a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="identitas_motor.php">Katalog Motor</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Transaksi</a> 
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="daftar_barang.php">Daftar Barang</a>
                <a class="dropdown-item" href="alert.php">Transaksi</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="user.php">Kelola User</a>
        </li>
    </ul>
    <?php if (isset($_SESSION["Nama"])) : ?>
        <p class="h6 text-white mr-5">Halo <?php echo $_SESSION["Nama"] ?>, Hak Akses Kamu <?php echo $_SESSION["Akses"] ?></p>
    </div>
        <a href="../../logout.php" class="btn btn-light buttonnavbar">Logout</a>
    <?php else : ?>
        <a href="../../login.php" class="btn btn-light buttonnavbar">Login</a>
    <?php endif; ?>
</nav>
<!-- header -->
<div class="header">
    <h1 class="mt-5">User</h1>
</div>
<!-- body -->
<div class="container">
	<div class="mt-4">
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th>ID User</th>
						<th>Nama</th>
						<th>Hak Akses</th>
						<th>Create Date</th>
						<th>Manager</th>
						<th>Edit/Hapus</th>
					</tr>
				</thead>
				<tbody>
                <?php
                    include '../../koneksi.php';
                    $data=mysqli_query($koneksi,"SELECT * FROM user") or die(mysqli_error($koneksi));
                    foreach($data as $pengguna){?>
					<tr>
						<td><?php echo $pengguna['IDUser'];?></td>
						<td><?php echo $pengguna['Nama'];?></td>
						<td><?php echo $pengguna['Hak_Akses'];?></td>
						<td><?php echo $pengguna['Create_Date'];?></td>
						<td><?php echo $pengguna['Manager'];?></td>
						<td>
                            <a href="../../proses/user_delete.php?IDUser=<?php echo $pengguna['IDUser']?>" class="btn btn-danger" onclick="return confirm('Anda akan menghapus data ini ?')">Hapus</a> 
                            <a href="user_update.php?IDUser=<?php echo $pengguna['IDUser']?>" class="btn btn-warning">Edit</a>
						</td>
					</tr>
                <?php }
                ?>    
				</tbody>
            </table>
        </div>
    </div>
	<a class="btn btn-success my-4" href="user_create.php" >Tambah Data</a>
</div>

<!-- Footer -->
<footer>
    <h6 class="text-center p-5"> @Copyright - JDRB 2021</h6>
</footer>
</body>

</html>