<?php
session_start();

include_once "config/koneksi.php";

if (isset($_POST['login'])){
  $username = htmlspecialchars(mysqli_real_escape_string($con,$_POST['username']));
  $password = htmlspecialchars(mysqli_real_escape_string($con,$_POST['password']));

  $sql = "SELECT username , `password` FROM `data_admin` WHERE username = '$username' AND `password` = MD5('$password')";

  $result = mysqli_query($con,$sql);

  if (mysqli_num_rows($result) > 0) {
    $_SESSION["admin"] = true;
    echo"<script>alert('Selamat datang admin !'); location.href='index.php';</script>";
  }else{
    echo"<script>alert('Akun salah gais !');</script>";
}
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="../users/assets/img/logo/Logo_Filing_revisi.png" />
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="../users/assets/img/Logo_Filing_revisi.png" rel="icon" />
  <link href="../users/assets/img/Logo_Filing_revisi.png" rel="apple-touch-icon" />
    <title>Login Admin Filing</title>
    <style>
        .wall-1 {
            padding: 20px 0;
            background: linear-gradient(to bottom right, rgb(0, 0, 0, 0.7), rgb(0, 0, 0, 0.2)), url("../assets/img/wall-1.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: top;
            background-size: cover;
        }
    </style>
  </head>
  <body>
    <section class="material-half-bg wall-1 py-0">
      <div class="cover" style="background: linear-gradient(to bottom right, rgb(255, 211, 18),rgb(194, 94, 0));"></div>
    </section>
    <section class="login-content">
      <div class="login-box">
        <form class="login-form" action="" method="post">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>LOGIN ADMIN</h3>
          <div class="form-group">
            <label class="control-label">USERNAME</label>
            <input class="form-control" type="text" placeholder="Username" autofocus name="username">
          </div>
          <div class="form-group">
            <label class="control-label">PASSWORD</label>
            <input class="form-control" type="password" placeholder="Password" name="password">
          </div><br>
           <!-- <a href="register.php">Regsiter</a> -->
          <div class="form-group btn-container">
            <button class="btn btn-warning btn-block" type="submit" name="login"><i class="fa fa-sign-in fa-lg fa-fw"></i>Login</button>
          </div>
        </form>
      </div>
    </section>  <a href="register.php">Register</a>
  </body>
</html>