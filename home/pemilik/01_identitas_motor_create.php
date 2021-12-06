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
            <a href="01_index.php"><img src="../../img/logo.png" class="logo-navbar"><a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="01_identitas_motor.php">Katalog Motor</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="01_alert.php">Transaksi</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="01_user.php">Kelola User</a>
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
    <h1 class="mt-5">Input Data Motor</h1>
</div>
<!-- body -->
<div class="container" >
		<div class="bg-light m-4 p-4">
			<form method="post" action="01_identitas_motor_createproses.php">
                <div class="form-group row my-4">
                    <label class="col-sm-2 col-form-label" for="ID">ID</label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control" name="ID" placeholder="ID">
                    </div>
                </div>
                <div class="form-group row my-4">
                    <label class="col-sm-2 col-form-label" for="NoRegistrasi">No Registrasi</label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control" name="NoRegistrasi" placeholder="No Registrasi">
                    </div>
                </div>
                <div class="form-group row my-4">
                    <label class="col-sm-2 col-form-label" for="NamaPemilik">Nama Pemilik</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="NamaPemilik" placeholder="Nama Pemilik">
                    </div>
                </div>
                <div class="form-group row my-4">
                    <label class="col-sm-2 col-form-label" for="Alamat">Alamat </label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="Alamat" placeholder="Alamat ">
                    </div>
                </div>
                <div class="form-group row my-4">
                    <label class="col-sm-2 col-form-label" for="NoRangka">No Rangka</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="NoRangka" placeholder="No Rangka">
                    </div>
                </div>
                <div class="form-group row my-4">
                    <label class="col-sm-2 col-form-label" for="NoMesin">No Mesin</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="NoMesin" placeholder="No Mesin">
                    </div>
                </div>
                <div class="form-group row my-4">
                    <label class="col-sm-2 col-form-label" for="PlatNo">Plat No</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="PlatNo" placeholder="Plat No">
                    </div>
                </div>
                <div class="form-group row my-4">
                    <label class="col-sm-2 col-form-label" for="Merk">Merk</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="Merk" placeholder="Merk">
                    </div>
                </div>
                <div class="form-group row my-4">
                    <label class="col-sm-2 col-form-label" for="Type">Type</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="Type" placeholder="Type">
                    </div>
                </div>
                <div class="form-group row my-4">
                    <label class="col-sm-2 col-form-label" for="Model">Model</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="Model" placeholder="Model">
                    </div>
                </div>
                <div class="form-group row my-4">
                    <label class="col-sm-2 col-form-label" for="TahunPembuatan">Tahun Pembuatan</label>
                    <div class="col-sm-4">
                        <input type="year" class="form-control" name="TahunPembuatan" placeholder="Tahun Pembuatan">
                    </div>
                </div>
                <div class="form-group row my-4">
                    <label class="col-sm-2 col-form-label" for="IsiSilinder">Isi Silinder</label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control" name="IsiSilinder" placeholder="Isi Silinder">
                    </div>
                </div>
                <div class="form-group row my-4">
                    <label class="col-sm-2 col-form-label" for="BahanBakar">Bahan Bakar</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="BahanBakar" placeholder="Bahan Bakar">
                    </div>
                </div>
                <div class="form-group row my-4">
                    <label class="col-sm-2 col-form-label" for="WarnaTNKB">Warna TNKB</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="WarnaTNKB" placeholder="Warna TNKB">
                    </div>
                </div>
                <div class="form-group row my-4">
                    <label class="col-sm-2 col-form-label" for="TahunRegistrasi">TahunRegistrasi</label>
                    <div class="col-sm-4">
                        <input type="year" class="form-control" name="TahunRegistrasi" placeholder="TahunRegistrasi">
                    </div>
                </div>
                <div class="form-group row my-4">
                    <label class="col-sm-2 col-form-label" for="NoBPKB">Nomor BPKB</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="NoBPKB" placeholder="Nomor BPKB">
                    </div>
                </div>
                <div class="form-group row my-4">
                    <label class="col-sm-2 col-form-label" for="KodeLokasi">KodeLokasi </label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="KodeLokasi" placeholder="KodeLokasi">
                    </div>
                </div>
                <div class="form-group row my-4">
                    <label class="col-sm-2 col-form-label" for="MasaBerlakuSTNK">Masa Berlaku STNK </label>
                    <div class="col-sm-4">
                        <input type="date" class="form-control" name="MasaBerlakuSTNK" placeholder="Masa Berlaku STNK">
                    </div>
                </div>
                
                <div class="form-group row my-4">
                    <div class="col-sm-10">
                        <input type="submit" class="btn btn-success px-4" name="Simpan"></button>
                    </div>
                </div>
            </form>
        </div>
        Hanya Pemilik yang bisa akses halaman ini, Selamat Datang <?php echo $_SESSION["Nama"] ?>
    </div>
    <!-- Footer -->
<footer>
    <h6 class="text-center p-5"> @Copyright - JDRB 2021</h6>
</footer>
</body>

</html>