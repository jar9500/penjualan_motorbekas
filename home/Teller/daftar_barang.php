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
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a href="index.php"><img src="../../img/logo.png" class="logo-navbar"><a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="identitas_motor.php">Katalog Motor</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="transaksi.php">Transaksi</a>
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
    <h1 class="mt-5">Galeri Motor</h1>
</div>
<!-- body -->
<!-- JQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="../../bootsrap.js"></script>
<div class="container">
    <div class="row mtb-60">
        <div class="row">
            <div class="col-md-4 border border-2  shadow p-3 mb-5 bg-white ">
                <div class="well">
                    <img class="thumbnail img-responsive" id="gallery" alt="Contoh Gambar" src="../../img/pm3.jpg" alt="">
                    <figcaption class="figure-caption">A caption for the above image.</figcaption>
                </div>
            </div>
            <div class="col-md-4 border border-2 shadow p-3 mb-5 bg-white">
                <div class="well">
                    <img class="thumbnail img-responsive" id="gallery"  alt="Contoh Gambar" src="../../img/pm3.jpg" alt="">
                    <figcaption class="figure-caption">A caption for the above image.</figcaption>
                </div>
            </div>
            <div class="col-md-4 border border-2  shadow p-3 mb-5 bg-white ">
                <div class="well">
                    <img class="thumbnail img-responsive" id="gallery" alt="Contoh Gambar" src="../../img/pm3.jpg" alt="">
                    <figcaption class="figure-caption">A caption for the above image.</figcaption>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer>
    <h6 class="text-center p-5"> @Copyright - JDRB 2021</h6>
</footer>
</body>

</html>