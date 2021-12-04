<?php
session_start();

unset($_SESSION["Nama"]);
$_SESSION["alert"] = "Anda telah Logout";

header("Location:index.php");
?>