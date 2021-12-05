<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="style.css" />
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </head>

  <body>
    <!-- login -->
    <section>
      <div id="box1">
        <div id="box1-title">
          <h2 style="text-align: left; padding-left: 1%">Buat Akun</h2>
        </div>
        <form method="post" class="form" action="registerproses.php">
          <label for="user-name" style="padding-left: 30px; text-align: left">Nama</label> <br />
          <input id="user-name" style="margin-left: 35px" class="form-content" type="text" name="Nama" autocomplete="on" required />
          <div class="form-border"></div>
          <label for="user-password" style="padding-left: 30px; padding-top: 22px">Password</label> <br />
          <input id="user-password" style="margin-left: 35px" class="form-content" type="password" name="Password" required />
          <div class="form-border"></div>
          <label class="col-sm-6 mt-3 col-form-label" style="margin-left: 7%" for="Hak_Akses">Hak Akses</label>
            <div class="col-sm-4" style="margin-left: 7%; margin-top:10px;">
              <select class="form-control" name="Hak_Akses">
                <option selected>Hak Akses</option>
                <option value="Pemilik">Pemilik</option>
                <option value="Teknisi">Teknisi</option>
                <option value="Teller">Teller</option>
                <option value="Customer">Customer</option>
              </select>
            </div>
          <label for="user-password" style="padding-left: 30px; padding-top: 22px">Manager</label> <br />
          <input id="user-password" style="margin-left: 35px" class="form-content" type="text" name="Manager" required />
          <div class="form-border"></div>
          <br />
          <button class="btn btn-primary button1" type="submit" name="button">Daftar</button>
          <br />
          <div style="font-size: 12px; margin-left: 8%; margin-top:4%">
            <p>Have account? <a href="login.php">Login</a> Here!</p>
          </div>
        </form>
      </div>
    </section>
    <aside>
      <div id="box2">
        <img src="img/motor.jpg" style="width: 100%; height: 100%; filter: blur(4px)" />
      </div>
    </aside>
    <div id="box3">
      <a href="index.php" ><img src="img/logo2.png" style="width: 50%; height: 50%; position: absolute; margin-left: 12%; margin-top: 10%" /></a>
    </div>
  </body>
</html>
