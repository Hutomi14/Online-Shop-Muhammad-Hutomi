<?php

	$id = $_GET['id'];

	$sql = $koneksi->query("select * from tb_buku where id_buku='$id'");

	$tampil = $sql->fetch_assoc();

	$tahun2 = $tampil['tahun_terbit'];

  
?>

<div class="panel panel-default">
<div class="panel-heading">
UPDATE DATA BUKU
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-10">

                                    <form method="POST">
                                        <div class="form-group">
                                            <label>Judul</label>
                                            <input class="form-control" name="judul" value="<?php echo $tampil['judul'];?>" />

                                        </div>

                                         <div class="form-group">
                                            <label>Pengarang</label>
                                            <input class="form-control" name="pengarang" value="<?php echo $tampil['pengarang'];?>" />

                                        </div>

                                         <div class="form-group">
                                            <label>Penerbit</label>
                                            <input class="form-control" name="penerbit" value="<?php echo $tampil['penerbit'];?>" />

                                        </div>

                                        <div class="form-group">
                                            <label>Tahun Terbit</label>
                                            <select class="form-control" name="tahun_terbit">
                                               <?php

                                               	$tahun = date("Y");

                                               	for ($i=$tahun-30; $i <= $tahun ; $i++) {
                                        
                                               		if ($i == $tahun2) {
                                               			echo'<option value="'.$i.'"selected>'.$i.'</option>';

                                               		}else
                                               		{
                                               			echo'<option value="'.$i.'">'.$i.'</option>';
                                               		}                                    

                                               	}


                                               ?>
                                            </select>
                                        </div>

                                         <div class="form-group">
                                            <label>ISBN</label>
                                            <input class="form-control" name="isbn" value="<?php echo $tampil['isbn'];?>" />

                                        </div>

                                         <div class="form-group">
                                            <label>Jumlah Buku</label>
                                            <input class="form-control" type="number" name="jumlah" value="<?php echo $tampil['jumlah'];?>" />

                                        </div>

                                        
                                        <div class="form-group">
                                            <label>Harga</label>
                                            <input class="form-control" type="number" name="jumlah" value="<?php echo $tampil['harga'];?>" />

                                        </div>                               


                                         <div class="form-group">
                                            <label>Tanggal Input</label>
                                            <input class="form-control" name="tanggal" type="date" value="<?php echo $tampil['tgl_beli'];?>" />

                                        </div>

                                    	<div>

                                    <input type="submit" name="simpan" value="simpan" class="btn btn-primary">

                                </div>
                            </div>
                        </form>
</div>
</div>
</div>


<?php

	$judul = $_POST ['judul'];
	$pengarang = $_POST ['pengarang'];
	$penerbit = $_POST ['penerbit'];
	$tahun = $_POST ['tahun_terbit'];
	$isbn = $_POST ['isbn'];
	$jumlah = $_POST ['jumlah'];
	$harga = $_POST ['harga'];
	$tanggal = $_POST ['tgl_beli'];

	$simpan = $_POST ['simpan'];

	if ($simpan) {

		$sql = $koneksi->query("update tb_buku set judul='$judul', pengarang='$pengarang', penerbit='$penerbit', tahun_terbit='$tahun', isbn='$isbn', jumlah='$jumlah', harga='$harga', tgl_beli='$tanggal' where id_buku='$id'");

		if ($sql) {
			?>
				<script type="text/javascript">

					alert ("Data Berhasil Diupdate");
					window.location.href="?page=buku";

				</script> 
					<?php
		}
	}


?>