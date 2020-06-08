
<?php  

    $koneksi = new mysqli ("localhost","root","","db_perpustakaan");

?>
<?PHP error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <SCRIPT language='javascript' >
    var txt=' Digital Library UNIMAL';
    var speed=150;var refresh=null;function move() { document.title=txt;
    txt=txt.substring(1,txt.length)+txt.charAt(0);
    refresh=setTimeout("move()",speed);}move();
    </SCRIPT>

    <title></title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    
    <style>
        #box{
                
                margin-left:18px;
                padding-left:6px;

            }
    </style>
    
    
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <strong>Email: </strong>lib@unimal.ac.id
                    &nbsp;&nbsp;
                    <strong>Support: </strong>+62-645-41373
                </div>

            </div>
        </div>
    </header>
    <!-- HEADER END-->

    <div class="navbar navbar-inverse set-radius-zero">
        <div class="container">
        
            <a href="?page=home">
            	<img src="assets/img/logoo.png" />
            </a>
        </div>
       </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="?page=home">Beranda</a></li>
                            <li><a href="?page=newbook">Buku Baru</a></li>
                            <!--<li><a href="?page=cekpinjaman">Cek Pinjaman</a></li>
                             <li><a href="adminn.php">Administrator</a></li>
                             <li><a href="login.php">Login</a></li>-->
                            
                            <ul class="nav navbar-nav navbar-right" >
                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Login <span class="glyphicon glyphicon-log-in"></span>
                            </a>

                              <div class="dropdown-menu" style="padding: 20px 10px 5px 10px; width:300px;">
                                <form id="formLogin" class="form container-fluid" action="proseslogin.php" method="POST">
                                   <div class="form-group">
                                        <input type="text" class="form-control" name="inputusername" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="inputPassword" placeholder="Password">
                                        
                                    </div>
                                    <button type="submit" class="btn btn-primary">Login</button>

                                    
                                </form>
                                </div>
                            </li>          
                            </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
                <?php  

                        $page = $_GET['page'];
                        /*$aksi = $_GET['aksi'];


                        if ($page == "") {
                           if ($aksi == "") {
                               include "home.php";
                                }
                        }if ($page == "home") {
                           if ($aksi == "") {
                               include "home.php";
                           }elseif ($aksi="pencarian") {
                               include "pencarian.php";
                           }
                        }
                        if ($page == "newbook") {
                           if ($aksi == "") {
                               include "newbook.php";
                           }
                        }
                        if ($page == "daftarbuku") {
                           if ($aksi == "") {
                               include "daftarbuku.php";
                           }elseif ($aksi="tambah") {
                               include "tambahbuku.php";
                           }
                        }
                        elseif ($page == "cekpinjaman") {
                            if ($aksi == "") {
                               include "cekpinjaman.php";
                            }
                        }elseif ($page == "admin") {
                            if ($aksi == "") {
                               include "admin/adminn.php";
                            }
                        }
                        elseif ($page == "transaksi") {
                            if ($aksi == "") {
                               include "page/transaksi/transaksi.php";
                            }
                        }*/
                        if ($page == "") {
                            include "home.php";
                        }elseif ($page == "home") {
                            include "home.php";
                        }elseif ($page == "home-pencarian") {
                            include "pencarian.php";
                        }elseif ($page == "home-pencarian-detil") {
                            include "page/buku/detil.php";
                        }elseif ($page == "newbook") {
                            include "newbook.php";
                        }elseif ($page == "cekpinjaman") {
                            include "cekpinjaman.php";
                        }



                    ?>
            </div>
        </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    &copy; 2018 Perpustakaan Universitas Malikussaleh | By : ICT Team RPL Squad <a href="#" target="_blank">Universitas Malikussaleh</a>
                </div>

            </div>
        </div>
    </footer>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>

    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>

    <script type="text/javascript">
    $('.modal').parent().on('show.bs.modal', function (e) { $(e.relatedTarget.attributes['data-target'].value).appendTo('body'); })
</script>
</body>
</html>
