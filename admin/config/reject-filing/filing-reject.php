<?php
include "../koneksi.php";

$id = $_GET['id'];
$queries = mysqli_query($con, "UPDATE `data_user` SET stat = 2 WHERE id = '$id' ");
if($queries){
    echo "<script>alert('Account Rejected'); 
    location.href='../../index.php'; </script>";
}else{
    echo "<script>alert('Account Failed To Rejected');
    location.href='../../index.php'; </script>";
}