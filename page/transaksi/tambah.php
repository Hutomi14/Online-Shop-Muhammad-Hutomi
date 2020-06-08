<?php 

$tanggal_pinjam = date("d-m-Y");
$tujuh_hari = mktime(0,0,0, date("n"), date("j")+7, date("Y"));
$tanggal_kembali = date("d-m-Y", $tujuh_hari);

 ?>

<div class="panel panel-default">
<div class="panel-heading">
TAMBAH DATA TRANSAKSI
</div>
<div class="panel-body">
                    <div class="row">
                    <div class="col-md-7">
                        <div class="col-md-7">
                           <form method="POST" class="form-inline">
                            <input class="form-control" name="keysearh1" id="ex3" type="text" placeholder="Masukan ID Buku">
                            <input class="form-control" name="keysearh2" id="ex3" type="text" placeholder="Masukan ID Anggota">
                            <input type="submit" value="Cari ID" class="btn btn-success">
                        </form>
                        </div>
                    </div>
                       

                                <?php

                                    $id_buku = $_POST['keysearh1'];
                                    $id_anggota = $_POST['keysearh2'];

                                    $sql_buku = $koneksi->query("SELECT * from tb_buku where id_buku='$id_buku'");
                                    $sql_anggota = $koneksi->query("SELECT * from tb_anggota where id_pengenal='$id_anggota'");

                                    $tampil_buku = $sql_buku->fetch_assoc();   
                                    $tampil_anggota = $sql_anggota->fetch_assoc();                             
                                ?>
                                                                    
                                <form method="POST">
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label>ID Buku</label>
                                            <input class="form-control" name="id_buku" value="<?php echo $tampil_buku['id_buku'];?>" readonly />
                                        </div>

                                        <div class="form-group">
                                            <label>Judul Buku</label>
                                            <input class="form-control" name="judul" value="<?php echo $tampil_buku['judul'];?>" readonly />
                                        </div>

                                         <div class="form-group">
                                            <label>Pengarang</label>
                                            <input class="form-control" name="pengarang" value="<?php echo $tampil_buku['pengarang']; ?>" readonly />
                                        </div>

                                        <div class="form-group">
                                            <label>Tahun Terbit</label>
                                            <input class="form-control" name="tahun_terbit" value="<?php echo $tampil_buku['tahun_terbit']; ?>" readonly />
                                        </div>


                                        <div class="form-group">
                                            <label>ID Anggota</label>
                                            <input class="form-control" name="id_pengenal" value="<?php echo $tampil_anggota['id_pengenal'];?>" readonly />
                                        </div>

                                        <div class="form-group">
                                            <label>Nama Peminjam</label>
                                            <input class="form-control" name="nama" value="<?php echo $tampil_anggota['nama'];?>" readonly />
                                        </div>

                                         <div class="form-group">
                                            <label>No HP</label>
                                            <input class="form-control" name="no_hp" value="<?php echo $tampil_anggota['no_hp']; ?>" readonly />
                                        </div>

                                        
                                         <div class="form-group">
                                            <label>Tanggal Pinjam</label>
                                            <input class="form-control" type="text" name="tanggal_pinjam" id="tgl" value="<?php echo $tanggal_pinjam; ?>" readonly />

                                        </div>

                                         <div class="form-group">
                                            <label>Tanggal Kembali</label>
                                            <input class="form-control" type="text" name="tanggal_kembali" id="tgl" value="<?php echo $tanggal_kembali; ?>" readonly />

                                        </div>

                                    	<div>

                                    <input type="submit" name="simpanloh" value="simpan" style="margin-top: 8px" class="btn btn-primary">

                                </div>
                            </form>
                            
                        
                       </div>
</div>
</div>
</div>


<?php
    
    $tanggal_pinjam = $_POST['tanggal_pinjam'];
    $tanggal_kembali = $_POST['tanggal_kembali'];
    $id_buku = $_POST['id_buku'];
    $judul = $_POST['judul'];
    $id_anggota = $_POST['id_pengenal'];
    $tanggal_pinjam = $_POST['tanggal_pinjam'];
    $tanggal_kembali = $_POST['tanggal_kembali'];


    $simpan = $_POST['simpanloh'];
	if ($simpan) {

		
		/*$sql = $koneksi->query("SELECT * from tb_buku where id_buku = '$id_buku'");
		while ($data = $sql->fetch_assoc()) {
			$sisa = $data['jumlah'];

			if ($sisa < 1) {
				?>
					<script type="text/javascript">

						alert("Stok Bukunya Habis, Jadi Kenapa Masih Ketemu di Rak???");
						window.location.href="?page=transaksi-tambah";

					</script>
				<?php
			}else {*/
				$sql = $koneksi->query("INSERT INTO tb_pinjam (id_buku, judul, id_anggota, tanggal_pinjam, tanggal_kembali, status) values ('$id_buku', '$judul', '$id_anggota', '$tanggal_pinjam', '$tanggal_kembali','Pinjam')");

				$sqlyog = $koneksi->query("UPDATE tb_buku set jumlah=(jumlah-1) where id_buku='$id_buku'"); 

                if ($sql) {
				?>
					<script type="text/javascript">

						alert("Berhasil Menyimpan Data");
						window.location.href="?page=transaksi";

					</script>
					<?php
			}
        }
		
    
	
?>