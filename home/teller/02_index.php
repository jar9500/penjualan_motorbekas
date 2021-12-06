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
    <script script src="../../bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark ">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a href="02_index.php"><img src="../../img/logo.png" class="logo-navbar"><a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="02_identitas_motor.php">Katalog Motor</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="02_transaksi.php">Transaksi</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="02_user.php">Kelola User</a>
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
    <h1 class="mt-5">Penjualan Motor Bekas</h1>
    <p class="my-3 h5 text-center"> Motorbekas.com adalah website menyedia layanan penjualan motor bekas, <br>
      berbagai motor bekas tersedia disini dengan kualitas yang terbaik.</p>
  </div>
  <!-- body -->

  <!-- Carousel -->
  <div id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
    </div>

    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../../img/pm1.png" alt="Honda Beat" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="../../img/pm2.jpg" alt="Suzuki Nex 2" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="../../img/pm3.jpg" alt="Honda GTR" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="../../img/pm4.jpg" alt="Honda Vario" class="d-block w-100">
      </div>
    </div>

    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bg-dark"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span class="carousel-control-next-icon bg-dark"></span>
    </button>
  </div>

  <!-- Footer -->
  <footer>
    <h6 class="text-center p-5"> @Copyright - JDRB 2021</h6>
  </footer>

</body>

</html>