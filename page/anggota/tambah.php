<!--<script type="text/javascript">
	function validasi(form)
        {
        if (form.nim.value=="") {
			alert("NIM Harus Diisi");
			form.nim.focus();
			return(false);
		}if (form.nama.value=="") {
			alert("Nama Harus Diisi");
			form.nama.focus();
			return(false);
		}if (form.tmpt_lahir.value=="") {
			alert("Tempat Lahir Harus Diisi");
			form.tmpt_lahir.focus();
			return(false);
		}if (form.tgl_lahir.value=="") {
			alert("Tanggal Lahir Harus Diisi");
			form.tgl_lahir.focus();
			return(false);
		}
		return(true);
	}
</script>-->
<div class="panel panel-default">
<div class="panel-heading">
TAMBAH ANGGOTA
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-8">

                                    <form method="POST" onsubmit="return validasi(this)">
                                        <div class="form-group">
                                            <label>ID Pengenal</label>
                                            <input class="form-control" name="id_pengenal" />
                                        </div>

                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" name="nama" />

                                        </div>

                                         <div class="form-group">
                                            <label>Tempat Lahir</label>
                                            <input class="form-control" name="tempat_lahir" />

                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input class="form-control" type="date" name="tanggal_lahir" />

                                        </div>

                                         <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <select class="form-control" name="gender">
                                              <option >Laki-laki</option>
                                              <option >Perempuan</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>No HP</label>
                                            <input class="form-control" type="text" name="no_hp" />
                                        </div>

                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input class="form-control" type="text" name="alamat" />
                                        </div>

                                        <div class="form-group">
                                            <label>E-Mail</label>
                                            <input class="form-control" type="text" name="email" />
                                        </div>

                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control" name="status">
                                              <option >Mahasiswa</option>
                                              <option >Dosen</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Prodi</label>
                                            <select class="form-control" name="prodi">
                                              <option >Teknik Informatika</option>
                                              <option >Sistem Informasi</option>
                                              <option >Teknik Elektro</option>
                                              <option >Teknik Sipil</option>
                                              <option >Teknik Arsitektur</option>
                                              <option >Teknik Industri</option>
                                              <option >Teknik Kimia</option>
                                              <option >Teknik Mesin</option>

                                              <option >Agribisnis</option>
                                              <option >Agroekoteknologi</option>
                                              <option >Budidaya Perairan</option>

                                              <option >Pendidikan Dokter</option>
                                              <option >Pendidikan Kimia</option>
                                              <option >Pendidikan Fisika</option>
                                              <option >Pendidikan Matematika</option>
                                              <option >Pendidikan Teknik Mesin</option>

                                              <option >Akuntansi</option>
                                              <option >Antropologi</option>
                                              <option >Ekonomi Islam</option>
                                              <option >Ilmu Administrasi Negara</option>
                                              <option >Ilmu Ekonomi & Studi Pembangunan</option>
                                              <option >Manajemen</option>

                                              <option >Ilmu Hukum</option>
                                              <option >Ilmu Komunikasi</option>
                                              <option >Ilmu Politik</option>
                                              <option >Sosiologi</option>

                                              <option >Psikologi</option>
                                              <option >Sastra Indonessia</option>


                                            </select>
                                        </div>
                                    

                                    	<div class="jarak">

                                        <input type="submit" name="simpan" value="simpan" class="btn btn-primary">

                                        </div>
                            </div>
                        </form>
</div>
</div>
</div>


<?php
	$id_pengenal = $_POST ['id_pengenal'];
	$nama = $_POST ['nama'];
	$tempat_lahir = $_POST ['tempat_lahir'];
	$tanggal_lahir = $_POST ['tanggal_lahir'];
	$gender = $_POST ['gender'];
    $no_hp= $_POST ['no_hp'];
    $alamat= $_POST ['alamat'];
    $email= $_POST ['email'];
    $status= $_POST ['status'];
	$prodi= $_POST ['prodi'];

	$simpan = $_POST ['simpan'];

	if ($simpan) {

		$sql = $koneksi->query("INSERT INTO `tb_anggota`(`id_pengenal`, `nama`, `tempat_lahir`, `tanggal_lahir`, `gender`, `no_hp`, `alamat`, `email`, `status`, `prodi`) VALUES ('$id_pengenal','$nama','$tempat_lahir','$tanggal_lahir','$gender','$no_hp','$alamat','$email','$status','$prodi')");

		if ($sql) {
			?>
				<script type="text/javascript">

					alert ("Data Berhasil Disimpan");
					window.location.href="?page=anggota";

				</script> 
					<?php
		}
	}


?>