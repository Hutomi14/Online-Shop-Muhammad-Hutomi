<?php 
include 'function.php'; 
$koneksi = new mysqli ("localhost","root","","db_perpustakaan");
?>
<?PHP error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); ?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <SCRIPT language='javascript' >
      var txt=' Digital Library UNIMAL';
      var speed=150;
      var refresh=null;
      function move() {
        document.title=txt;
        txt=txt.substring(1,txt.length)+txt.charAt(0);
        refresh=setTimeout("move()",speed);
      }
      move();
    </SCRIPT>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./assets/css/vendor.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/flat-admin.css">
    <!-- Theme -->
    <link rel="stylesheet" type="text/css" href="./assets/css/theme/blue-sky.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/theme/blue.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/theme/red.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/theme/yellow.css">
    <style type="text/css">
      .jarak{
        padding-top :10px;
      }
    </style>
  </head>
  <body>
    <div class="app app-default">
      <aside class="app-sidebar" id="sidebar">
        <div class="sidebar-header">
          <a class="sidebar-brand" href="#">
            <span class="highlight">ADMINISTRATOR
            </span>
          </a>
          <button type="button" class="sidebar-toggle">
            <i class="fa fa-times">
            </i>
          </button>
        </div>
        <div class="sidebar-menu">
          <ul class="sidebar-nav">
            <li class="active">
              <a href="adminn.php">
                <div class="icon">
                  <i class="fa fa-tasks" aria-hidden="true">
                  </i>
                </div>
                <div class="title">Dashboard
                </div>
              </a>
            </li>
          </ul>
        </div>
      </aside>
      <script type="text/ng-template" id="sidebar-dropdown.tpl.html">
  <div class="dropdown-background">
    <div class="bg"></div>
        </div>
  <div class="dropdown-container">
    {{list}}
        </div>
      </script>
      <div class="app-container">
        <nav class="navbar navbar-default" id="navbar">
          <div class="container-fluid">
            <div class="navbar-collapse collapse in">
              <ul class="nav navbar-nav navbar-mobile">
                <li>
                  <button type="button" class="sidebar-toggle">
                    <i class="fa fa-bars">
                    </i>
                  </button>
                </li>
                <li class="logo">
                  <a class="navbar-brand" href="#">
                    <span class="highlight">ADMIN
                    </span>istrator
                  </a>
                </li>
                <li>
                  <button type="button" class="navbar-toggle">
                    <img class="profile-img" src="./assets/images/profile.png">
                  </button>
                </li>
              </ul>
              <ul class="nav navbar-nav navbar-left">
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <div style="color: white;
                            padding: 15px 50px 5px 50px;
                            float: right;
                            font-size: 16px;"> 
                  <a href="index.php" class="btn btn-danger square-btn-adjust">Logout
                  </a> 
                </div>
                </div>
            </div>
            </nav>
          <div class="row">
            <a href="?page=buku">
              <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="card card-banner card-green-light">
                  <div class="card-body">
                    <i class="icon fa fa-tasks fa-4x">
                    </i>
                    <div class="content">
                      <div class="value">
                        <span class="sign">DATA BUKU
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
                </a>
              </div>
            <a href="?page=anggota">
              <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="card card-banner card-blue-light">
                  <div class="card-body">
                    <i class="icon fa fa-user fa-4x">
                    </i>
                    <div class="content">
                      <div class="value">
                        <span class="sign">DATA ANGGOTA
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
                </a>
              </div>
              <a href="?page=transaksi">
              <div class="col-lg-3 col-md-4 col-sm-4 col-xs-10">
                <div class="card card-banner card-yellow-light">
                  <div class="card-body">
                    <i class="icon fa fa-external-link fa-4x">
                    </i>
                    <div class="content">
                      <div class="value">
                        <span class="sign">DATA PEMINJAMAN
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </a>
            <a href="?page=transaksi">
              <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="card card-banner card-yellow-light">
                  <div class="card-body">
                    <i class="icon fa fa-external-link fa-4x">
                    </i>
                    <div class="content">
                      <div class="value">
                        <span class="sign">DATA PEMINJAMAN
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
                </a>
              </div>
          </div>
          
          <div class="container-fluid">
            <div class="navbar-collapse collapse in">
              <?php  
              $page = $_GET['page'];
                  if ($page == "buku") {
                    include "page/buku/buku.php";
                  }elseif ($page=="buku-tambah") {
                    include "page/buku/tambah.php";  
                  }elseif ($page=="buku-hapus") {
                    include "page/buku/hapus.php";  
                  }elseif ($page=="buku-ubah") {
                    include "page/buku/ubah.php";  
                  }elseif ($page=="anggota") {
                    include "page/anggota/anggota.php";  
                  }elseif ($page=="anggota-tambah") {
                    include "page/anggota/tambah.php";  
                  }elseif ($page=="anggota-hapus") {
                    include "page/anggota/hapus.php";  
                  }elseif ($page=="anggota-ubah") {
                    include "page/anggota/ubah.php";  
                  }elseif ($page=="transaksi") {
                    include "page/transaksi/transaksi.php";  
                  }elseif ($page=="transaksi-tambah") {
                    include "page/transaksi/tambah.php";  
                  }elseif ($page=="transaksi-perpanjang") {
                    include "page/transaksi/perpanjang.php";  
                  }elseif ($page=="transaksi-kembali") {
                    include "page/transaksi/kembali.php";  
                  }
              
              ?>
            </div>
          </div>
          <footer class="app-footer"> 
            <div class="row">
              <div class="col-xs-12">
                <div class="footer-copyright">
                  Copyright © 2016 Company Co,Ltd.
                </div>
              </div>
            </div>
          </footer>
          </div>
      </div>
      <script type="text/javascript" src="./assets/js/vendor.js">
      </script>
      <script type="text/javascript" src="./assets/js/app.js">
      </script>
      </body>
    </html>
