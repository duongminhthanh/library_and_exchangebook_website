<?php

session_start();
unset($_SESSION['idadmin']);

echo "<script>window.open('/Loginad/index.php','_self')</script>";
?>