<?php
if(empty($_SESSION["Nama"])){
    $_SESSION["alert"] = "anda harus login dulu";
    header("Location:login.php");
}
?>