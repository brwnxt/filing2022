<?php
// session_start();

include "config/koneksi.php";

if (isset($_POST['register'])){
  $username = htmlspecialchars(mysqli_real_escape_string($con,$_POST['username']));
  $password = htmlspecialchars(mysqli_real_escape_string($con,$_POST['password']));

  $sql = "INSERT INTO `data_admin`(`username`, `password`) VALUES ('$username',MD5('$password'))";

  $result = mysqli_query($con,$sql);
  $cek = mysqli_affected_rows($con);
  if ($cek > 0) {
    echo"<script>alert('Akun anda sudah didaftarkan !'); location.href='login.php';</script>";
  }else{
    echo"<script>alert('Akun belum terdaftar !');</script>";
}
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="../../users/assets/img/logo.png" />
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login Admin</title>
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
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>Register</h3>
          <div class="form-group">
            <label class="control-label">USERNAME</label>
            <input class="form-control" type="text" placeholder="Username" autofocus name="username">
          </div>
          <div class="form-group">
            <label class="control-label">PASSWORD</label>
            <input class="form-control" type="password" placeholder="Password" name="password">
          </div><br>
          <div class="form-group btn-container">
            <button class="btn btn-warning btn-block" type="submit" name="register"><i class="fa fa-sign-in fa-lg fa-fw"></i>Register</button>
          </div>
        </form>
      </div>
    </section>
  </body>
</html>