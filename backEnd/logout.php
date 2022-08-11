<?php
session_start();
unset($_SESSION['KullaniciAdi']);
session_destroy();
header("location:../front/login.php");


 ?>
