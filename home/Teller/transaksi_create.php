<!DOCTYPE html>
<html lang="en">
<?php 
session_start(); 
if( !isset($_SESSION['Teller']) )
{
    header('location:../'.$_SESSION['Akses'].'/index.php');
    exit();
}
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
<nav class="navbar navbar-expand-sm bg-dark navbar-dark ">
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
                <a class="dropdown-item" href="transaksi.php">Transaksi</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="user.php">Kelola User</a>
        </li>
    </ul>
    <?php if (isset($_SESSION["Nama"])) : ?>
        <p class="h6 text-white">Halo <?php echo $_SESSION["Nama"] ?>, Hak Akses Kamu <?php echo $_SESSION["Akses"] ?></p>
    </div>
        <a href="../../logout.php" class="btn btn-light buttonnavbar">Logout</a>
    <?php else : ?>
        <a href="../../login.php" class="btn btn-light buttonnavbar">Login</a>
    <?php endif; ?>
</nav>
<!-- header -->
<div class="container" >
    <div class="bg-light m-4 p-4">
        <h1>Tambah Transaksi</h1>
        <form method="post" action="../../proses/transaksi_createproses.php">
        <div class="form-group row my-4">
            <label class="col-sm-2 col-form-label" for="IdTrsk">ID Transaksi</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="IdTrsk" required>
            </div>
        </div>
        <div class="form-group row my-4">
            <label class="col-sm-2 col-form-label" for="Tgl_Trsk">Tanggal Transaksi</label>
            <div class="col-sm-4">
                <input type="date" class="form-control" name="Tgl_Trsk" required>
            </div>
        </div>
        <div class="form-group row my-4">
            <label class="col-sm-2 col-form-label" for="Id_Cust">ID Customer</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="Id_Cust" required>
            </div>
        </div>
        <div class="form-group row my-4">
            <label class="col-sm-2 col-form-label" for="Id_Kendaraan">ID Kendaraan</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="Id_Kendaraan" required>
            </div>
        </div>
        <div class="form-group row my-4">
            <label class="col-sm-2 col-form-label" for="Harga_Jual">Harga Jual</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="Harga_Jual" required>
            </div>
        </div>
        <div class="form-group row my-4">
            <label class="col-sm-2 col-form-label" for="Harga_Jual_Real">Harga Jual Asli</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="Harga_Jual_Real" required>
            </div>
        </div>
            <div class="form-group row my-4">
            <div class="col-sm-10">
                <input type="submit" class="btn btn-success px-4" name="Simpan"></button>
            </div>
            </div>
        </form>
        </div>
    </div>

<!-- Footer -->
<footer>
    <h6 class="text-center p-5"> @Copyright - JDRB 2021</h6>
</footer>
</body>

</html>