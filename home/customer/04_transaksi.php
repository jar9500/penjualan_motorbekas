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
            <a href="04_index.php"><img src="../../img/logo.png" class="logo-navbar"><a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="04_alert.php">Katalog Motor</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="04_transaksi.php">Transaksi</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="04_alert.php">Kelola User</a>
        </li>
    </ul>
    </div>
    <?php if (isset($_SESSION["Nama"])) : ?>
        <p class="h6 text-white mr-5">Halo,<?php echo $_SESSION["Nama"] ?></p>
        <a href="../../logout.php" class="btn btn-light buttonnavbar">Logout</a>
    <?php else : ?>
        <a href="../../login.php" class="btn btn-light buttonnavbar">Login</a>
    <?php endif; ?>
</nav>
<!-- header -->
<div class="header">
    <h1 class="mt-5">Transaksi</h1>
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
					</tr>
				</thead>
				<tbody>
                <?php
                    include '../../koneksi.php';
                    $data=mysqli_query($koneksi,"SELECT * FROM Identitas_Motor") or die(mysqli_error($koneksi));
                    foreach($data as $identitasmotor){?>
					<tr>
						<td><?php echo $identitasmotor['ID'];?></td>
						<td><?php echo $identitasmotor['NoRegistrasi'];?></td>
						<td><?php echo $identitasmotor['NamaPemilik'];?></td>
					</tr>
                <?php }
                ?>    
				</tbody>
            </table>
        </div>
    </div>
</div>

<!-- Footer -->
<footer>
    <h6 class="text-center p-5"> @Copyright - JDRB 2021</h6>
</footer>
</body>

</html>