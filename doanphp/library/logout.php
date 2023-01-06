<?php

session_start();
unset($_SESSION['idstulog']);
unset($_SESSION['cart']);
echo "<script>window.open('/Logincus/index.php','_self')</script>";
?>