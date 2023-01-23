<?php
session_start();

session_unset();

session_destroy();

unset($_SESSION["admin"]);

echo "<script>alert('Good bye !'); location.href='login.php';</script>";
?>