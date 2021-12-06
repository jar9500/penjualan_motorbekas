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
            <a class="nav-link" href="#">Kelola User</a>
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
    <h1 class="mt-5">Edit Data User</h1>
</div>
<!-- body -->
<div class="container" >
		<div class="bg-light m-4 p-4">
            <?php
                include '../koneksi.php';
                $IDUser=$_GET['IDUser'];
                $data=mysqli_query($koneksi,"SELECT * from user where IDUser='$IDUser' ") or die(mysqli_error($koneksi));
                $user=mysqli_fetch_array($data);
            ?>
			<form method="post" action="user_updateproses.php?IDUser=<?php echo $IDUser?>">
                <div class="form-group row my-4">
                    <label class="col-sm-2 col-form-label" for="IDUser">ID User</label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control" name="ID" value="<?php echo $user['IDUser']?>" required>
                    </div>
                </div>
                <div class="form-group row my-4">
                    <label class="col-sm-2 col-form-label" for="Nama">Nama</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="Nama" value="<?php echo $user['Nama']?>" required>
                    </div>
                </div>
                <div class="form-group row my-4">
                    <label class="col-sm-2 col-form-label" for="Password">Password</label>
                    <div class="col-sm-4">
                        <input type="Password" class="form-control" name="NamaPemilik" value="<?php echo $user['Password']?>" required>
                    </div>
                </div>
                <div class="form-group row my-4">
                    <label class="col-sm-2 col-form-label" for="Hak_Akses">Hak Akses</label>
                    <div class="col-sm-2">
                        <select class="form-control" name="Hak_Akses" value="<?php echo $user['Hak_Akses']?>" required>
                        <option selected>Hak Akses</option>
                        <option value="Pemilik">Pemilik</option>
                        <option value="Teller">Teller</option>
                        <option value="Teknisi">Teknisi</option>
                        <option value="Customer">Customer</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row my-4">
                    <label class="col-sm-2 col-form-label" for="Manager">Manager</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="Manager" value="<?php echo $user['Manager']?>" required>
                    </div>
                </div>
                
                <div class="form-group row my-4">
                    <div class="col-sm-10">
                        <input type="submit" class="btn btn-success px-4" name="Simpan"></button>
                    </div>
                </div>
            </form>
        </div>
        <p>Jika ingin Edit User, Harap Inputkan Kembali Password</P>
    </div>
    <!-- Footer -->
    <footer>
        <h6 class="text-center p-5"> @Copyright - JDRB 2021</h6>
    </footer>
</body>
</html>