<?php
session_start();

$sql = "SELECT * FROM  `data_user`";
include_once "config/koneksi.php";

if (!isset($_SESSION["admin"])) {
	echo "<script>alert('Yuk Login dulu kaka');
    location.href= 'login.php'
    </script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Admin FILING 2022</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css"
    href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="../users/assets/img/logo/Logo_Filing_revisi.png" rel="icon" />
  <link href="../users/assets/img/logo/Logo_Filing_revisi.png" rel="apple-touch-icon" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">
  <link href="css/animate.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
</head>
<body class="app sidebar" onload="load()">
  <header class="app-header"><a class="app-header__logo" href="index.html">FILING 2022</a>
    <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
    <ul class="app-nav">
      <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i
            class="fa fa-user fa-lg"></i></a>
        <ul class="dropdown-menu settings-menu dropdown-menu-right">
          <li><a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
        </ul>
      </li>
    </ul>
  </header>
  <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
  <aside class="app-sidebar">
    <div class="app-sidebar__user bg-warning">
      <div>
        <p class="app-sidebar__user-name">Admin</p>
        <p class="app-sidebar__user-designation">FILING 2022</p>
      </div>
    </div>
    <ul class="app-menu">
      <li><a class="app-menu__item active" href="index.php"><i class="app-menu__icon fa fa-dashboard"></i><span
            class="app-menu__label">Dashboard</span></a></li>
    </ul>
  </aside>
  <main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-th-list"></i> Data Peserta</h1>
      </div>
      <ul class="app-breadcrumb breadcrumb side">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item">Dashboard</li>
      </ul>
    </div>
    <h2>Status Pendafataran: <span class="" id="disable-status"></span></h2>
    <button id="disable-button" class="btn-warning" onclick="myFunction()"
      style="padding: 10px;font-family: 'Montserrat', sans-serif;text-transform: uppercase;">ditutup</button>

    <div class="content">
      <div class="container-fluid">
        <div class="jumlah-peserta" style="display: flex;">
          <h3>Jumlah Peserta : </h3>
          <h4 style="margin-top: 2px; margin-left: 5px;">
            <?php
                                    include "config/koneksi.php";
                                    $tampil = "SELECT * FROM `data_user`  ";
                                    $query = mysqli_query($con,$tampil);
                                    $count = mysqli_num_rows($query);
                                    echo "$count";
                                ?>
          </h4>
        </div>
        <div class="jumlah-peserta-diterima" style="display: flex;">
          <h3>Peserta yang Valid : </h3>
          <h4 style="margin-top: 2px; margin-left: 5px;">
            <?php
                                    include "config/koneksi.php";
                                    $tampil = "SELECT * FROM `data_user` WHERE  stat = 1  ";
                                    $query = mysqli_query($con,$tampil);
                                    $count = mysqli_num_rows($query);
                                    echo "$count";
                                ?>
          </h4>
        </div>
        <div class="jumlah-peserta-ditolak" style="display: flex;">
          <h3>Peserta yang Reject : </h3>
          <h4 style="margin-top: 2px; margin-left: 5px;">
            <?php
                                    include "config/koneksi.php";
                                    $tampil = "SELECT * FROM `data_user` WHERE  stat = 2  ";
                                    $query = mysqli_query($con,$tampil);
                                    $count = mysqli_num_rows($query);
                                    echo "$count";
                                ?>
          </h4>
        </div>
        <br>
        <ul class="nav nav-pills nav-pills-primary" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#FilingPending" role="tablist" aria-expanded="true">
              Pending
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#FilingValid" role="tablist" aria-expanded="false">
              Valid
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#FilingRejected" role="tablist" aria-expanded="false">
              Rejected
            </a>
          </li>
        </ul>
        <div class="tab-content tab-space">

          <div class="tab-pane mt-3 active" id="FilingPending" aria-expanded="true">
            <?php require("required-table-peserta/filing/filing.php"); ?>
          </div>

          <div class="tab-pane mt-3" id="FilingValid" aria-expanded="false">
            <?php require("required-table-peserta/filing/filingvalid.php"); ?>
          </div>

          <div class="tab-pane mt-3" id="FilingRejected" aria-expanded="false">
            <?php require("required-table-peserta/filing/filingreject.php"); ?>
          </div>

        </div>

      </div>
    </div>
</main>
  <div id="divbutton" hidden>
    <input onclick="window.location.href='menu.html'" type="button" id="button2" value="button 2" disabled />
  </div>
  <div class="footer">
    <div>
      <p>
        <center><strong>Maintained by Biro PTI 2021/2022</strong></center>
      </p>
    </div>
  </div>
  </div>
  </div>
  <script type="text/javascript">
    function newPopup(url) {
      popupWindow = window.open(
        url, 'popUpWindow',
        'height=700,width=800,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes'
      )
    }
  </script>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/plugins/pace.min.js"></script>
  <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
  <script type="text/javascropt" src="js/plugins/dataTables.min.js"></script>
  <script src="js/inspinia.js"></script>
  <script src="js/plugins/pace/pace.min.js"></script>
  <script src="js/jquery-3.1.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
  <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
  <script type="text/javascript">
    $('#sampleTable').DataTable();
  </script>
  <script>
    setInterval(() => {
      if (localStorage.enabledButton == "1") {
      }
      if (localStorage.enabledButton == "2") {
      }
    })
  </script>
  <script>
function load(){
   if (localStorage.getItem("btn-disable") === "true") {
        document.getElementById('disable-button').innerHTML = 'dibuka';
        document.getElementById('disable-status').innerHTML = 'ditutup';
        return
      }
      document.getElementById('disable-button').innerHTML = 'ditutup';
      document.getElementById('disable-status').innerHTML = 'dibuka';

}
function myFunction() {
        if (localStorage.getItem("btn-disable") === "true") {
          localStorage.setItem("btn-disable", false);
          document.getElementById('disable-button').innerHTML = 'ditutup';
          document.getElementById('disable-status').innerHTML = 'dibuka';
          alert("Pendaftaran sudah dibuka");
          return
        }
        localStorage.setItem("btn-disable", true);
        alert("Pendafatran sudah ditutup");
        document.getElementById('disable-button').innerHTML = 'dibuka';
        document.getElementById('disable-status').innerHTML = 'ditutup';
      }
  </script>
</body>

</html>