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
      
    }h4{
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
          <img src="img/logo.png" style="width:50px; height:50px;">
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
    <h1>Penjualan Motor Bekas</h1>
    <p> Motorbekas.com adalah website menyedia layanan penjualan motor bekas, <br>
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
        <img src="img/pm1.png" alt="Honda Beat" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="img/pm2.jpg" alt="Suzuki Nex 2" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="img/pm3.jpg" alt="Honda GTR" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="img/pm4.jpg" alt="Honda Vario" class="d-block w-100">
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
    <h4 style="text-align: center; padding: 5%;"> @Copyright - JDRB 2021</h4>
  </footer>

</body>

</html>