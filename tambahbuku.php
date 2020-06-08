<div class="panel panel-default">
     <div class="panel-heading"><h3>Masukan Data Buku</h3></div>
		<div class="panel-body">                        
		    <div class="row">
		        <div class="col-md-6">
		        	<form method="POST" class="form-horizontal">
					  <div class="form-group">
					    <label class="control-label col-sm-2">Judul</label>
					    <div class="col-sm-10">
					      	<input type="text" class="form-control" name="judul" placeholder="Masukan Judul Buku">
					    </div>
					  </div>

					  <div class="form-group">
					    <label class="control-label col-sm-2">Pengarang</label>
					    <div class="col-sm-10">
					      	<input type="text" class="form-control" name="pengarang" placeholder="Masukan Nama Pengarang">
					    </div>
					  </div>

					  <div class="form-group">
					    <label class="control-label col-sm-2">Penerbit</label>
					    <div class="col-sm-10">
					      	<input type="text" class="form-control" name="penerbit" placeholder="Masukan Penerbit">
					    </div>
					  </div>

					  <div class="form-group">
					    <label class="control-label col-sm-2">Tahun</label>
					    <div class="col-sm-10">
					      	<select class="form-control" name="tahun_terbit">
					      		<?php  
					      			$tahun = date("Y");

					      			for ($i=$tahun-29; $i <= $tahun; $i++) {  
					      				echo'
					      				<option value="'.$i.'">'.$i.'</option>
					      				';
					      			}
					      		?>
					      	</select>
					    </div>
					  </div>

					  <div class="form-group">
					    <label class="control-label col-sm-2">ISBN</label>
					    <div class="col-sm-10">
					      	<input type="text" class="form-control" name="isbn" placeholder="Masukan ISBN Buku">
					    </div>
					  </div>

					  <div class="form-group">
					    <label class="control-label col-sm-2">Jumlah</label>
					    <div class="col-sm-10">
					      	<input class="form-control" type="number" name="jumlah" placeholder="Masukan Jumlah Buku">
					    </div>
					  </div>

					  <div class="form-group">
					    <label class="control-label col-sm-2">Harga</label>
					    <div class="col-sm-10">
					      	<input type="text" class="form-control" name="harga" placeholder="Masukan Harga Buku">
					    </div>
					  </div>

					  <div class="form-group">
					    <label class="control-label col-sm-2">Pembelian</label>
					    <div class="col-sm-10">
					      	<input type="date" class="form-control" name="tgl_beli" placeholder="Masukan Tanggal Beli">
					    </div>
					  </div>

					  <div>
					  	<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
					  </div>	            
		            </form>
		        </div>
		   	</div>
		</div>
	</div>

<?php  

	$judul = $_POST ['judul'];
	$pengarang = $_POST ['pengarang'];
	$penerbit = $_POST ['penerbit'];
	$tahun_terbit = $_POST ['tahun_terbit'];
	$isbn = $_POST ['isbn'];
	$jumlah = $_POST ['jumlah'];
	$harga = $_POST ['harga'];
	$tgl_beli = $_POST ['tgl_beli'];

	$simpan = $_POST['simpan'];

	if ($simpan) {
		$sql = $koneksi->query("insert into tb_buku (judul,pengarang,penerbit,tahun_terbit,isbn,jumlah,harga,tgl_beli) 
			values ('$judul','$pengarang','$penerbit','$tahun_terbit','$isbn','$jumlah','$harga','$tgl_beli') ");
	
	if ($sql) {
		?>
		<script type="text/javascript">
			alert ("Data Berhasil Disimpan")
		</script>
		<?php
	}

	}

?>

    