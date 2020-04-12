<?php 
session_start(); 
if(!isset($_SESSION["login"])){
      echo "<script>
              alert('Anda harus login');
              document.location.href = '../login.php';
            </script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
   Nata Laundry
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="./assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="./assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          cv
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Tok Tok Matok
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="index.php">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <?php if($_SESSION["user"]["role"] === "admin") : ?>
          <li>
            <a href="dataPaket.php">
              <i class="now-ui-icons education_atom"></i>
              <p>Paket</p>
            </a>
          </li>
          <li>
            <a href="dataOutlet.php">
              <i class="now-ui-icons location_map-big"></i>
              <p>Outlet</p>
            </a>
          </li>
          <li>
            <a href="data_kasir.php">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>Kasir</p>
            </a>
          </li>
                    <li>
            <a href="data_member.php">
              <i class="now-ui-icons users_single-02"></i>
              <p>Member</p>
            </a>
          </li>
                    <li>
            <a href="data_owner.php">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Owner</p>
            </a>
          </li>
        <?php endif; ?>

          <?php if($_SESSION["user"]["role"] === "owner") : ?>
          <?php else: ?>
                      <li>
            <a href="transaksi.php">
              <i class="now-ui-icons text_caps-small"></i>
              <p>Transaksi</p>
            </a>
          </li>
          <?php endif; ?>
                    <li>
            <a href="laporan.php">
              <i class="now-ui-icons text_caps-small"></i>
              <p>Laporan</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Nata Laundry</a>
          </div>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo"><?php echo $_SESSION["user"]["username"]; ?>
                  <i class="now-ui-icons users_single-02"> </i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../logout.php">Logout
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->