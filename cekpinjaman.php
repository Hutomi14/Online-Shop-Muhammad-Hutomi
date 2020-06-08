<?php

$username = $_POST['inputusername'];
$koneksi = new mysqli ("localhost","root","","db_perpustakaan");

$query = mysqli_query($koneksi,"SELECT * from tb_anggota where id_pengenal='".$username."'");

$tampil = $query->fetch_assoc();
?>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Cek Pinjaman</h4>
                </div>
            </div>
            
            <div class="page-head-line"><img src="assets/img/2.jpg" height="340" width="1140"></div>
          
            <div class="Compose-Message">               
                <div class="panel panel-success">
                     <div class="panel-heading">
                        Masukan Kata Kunci Pencarian
                    </div>
                    <div class="panel-body">
                        <input type="text" class="form-control" />
                        <a href="#" class="btn btn-success"><span class="glyphicon glyphicon-search"></span>  Telusuri </a>
                    </div>
                    <div class="panel-footer text-muted">
                        <strong>Note : </strong>Masukkan Kata Kunci Pencarian Buku yang Ingin Dicari.
                    </div>
                </div>
            </div>
        </div>
        <div><?php echo $tampil['nama'];?></div>
    