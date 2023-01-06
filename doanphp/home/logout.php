<?php

session_start();
unset($_SESSION['idstulog']);
echo "<script>sessionStorage.clear();window.open('/Logincusexchan/index.php','_self')</script>";
?>