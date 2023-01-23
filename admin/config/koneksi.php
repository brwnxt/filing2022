<?php

//  $host = 'localhost';
//  $user = 'root';
//  $pass = '';
//  $db = 'dbfiling';
$host = 'localhost';
 $user = 'filingid_filing_mantap';
 $pass = 'Qey6nX7@5vBHkxV';
 $db = 'filingid_db_filing';

 $con = mysqli_connect($host,$user,$pass,$db)or die("ERROR");
// $servername = "localhost";
// $username = "bemfikti_basket";
// $password = "QwertyAlif4321";
// $database = "bemfikti_volun";

// $con    = mysqli_connect($servername, $username, $password, $database) or die ("ERROR");

if($_SERVER["HTTPS"]!="on"){

    header("Location:https://".

    $_SERVER["HTTP_HOST"].

    $_SERVER["REQUEST_URI"]);

    exit();

}
//  if ($con) {
//      echo "ada koneksi ke database";
//  }
?>