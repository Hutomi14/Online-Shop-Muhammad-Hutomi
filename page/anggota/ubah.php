<?php 

	$id = $_GET['id'];

	$sql = $koneksi->query("SELECT * from tb_anggota where id_pengenal = '$id'");

	$tampil = $sql->fetch_assoc();

	$gender = $tampil['gender'];

    $status = $tampil['status'];

	$prodi = $tampil['prodi'];

?>


<div class="panel panel-default">
<div class="panel-heading">
UPDATE DATA ANGGOTA
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-5">

                                    <form method="POST">
                                     
                                        <div class="form-group">
                                            <label>ID Pengenal</label>
                                            <input class="form-control" name="id_pengenal" value = "<?php echo $tampil['id_pengenal'];?>"/>

                                        </div>

                                         <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" name="nama" value="<?php echo $tampil['nama'];?>" />
                                        </div>

                                         <div class="form-group">
                                            <label>Tempat Lahir</label>
                                            <input class="form-control" name="tempat_lahir" value="<?php echo $tampil['tempat_lahir'];?>" />

                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input class="form-control" type="date" name="tanggal_lahir" value="<?php echo $tampil['tanggal_lahir'];?>" />

                                        </div>

                                         <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <select class="form-control" name="gender">
                                              <option <?php if ($gender=='Laki-laki') { echo "selected";
                                                    } ?>>Laki-laki</option>
                                              <option <?php if ($gender=='Perempuan') { echo "selected";
                                                    } ?>>Perempuan</option>
                                            </select>
                                        
                                        </div>

                                        <div class="form-group">
                                            <div class="jarak"><label>No HP</label></div>
                                            <input class="form-control" name="no_hp" value="<?php echo $tampil['no_hp'];?>" />
                                        </div>

                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input class="form-control" name="alamat" value="<?php echo $tampil['alamat'];?>" />
                                        </div>

                                        <div class="form-group">
                                            <label>E-Mail</label>
                                            <input class="form-control" name="email" value="<?php echo $tampil['email'];?>" />
                                        </div>

                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control" name="status">
                                              <option <?php if ($status=='Mahasiswa') { echo "selected";
                                                    } ?>>Mahasiswa</option>
                                              <option <?php if ($status=='Dosen') { echo "selected";
                                                    } ?>>Dosen</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <div class="jarak"><label>Prodi</label></div>
                                            <select class="form-control" name="prodi">
                                                <option <?php if ($prodi=='Teknik Informatika' ) { echo "selected"; } ?>>Teknik Informatika</option>
                                                <option <?php if ($prodi=='Sistem Informasi' ) { echo "selected"; } ?>>Sistem Informasi</option>
                                                <option <?php if ($prodi=='Teknik Elektro' ) { echo "selected"; } ?>>Teknik Elektro</option>
                                                <option <?php if ($prodi=='Teknik Sipil' ) { echo "selected"; } ?>>Teknik Sipil</option>
                                                <option <?php if ($prodi=='Teknik Arsitektur' ) { echo "selected"; } ?>>Teknik Arsitektur</option>
                                                <option <?php if ($prodi=='Teknik Industri' ) { echo "selected"; } ?>>Teknik Industri</option>
                                                <option <?php if ($prodi=='Teknik Kimia' ) { echo "selected"; } ?>>Teknik Kimia</option>
                                                <option <?php if ($prodi=='Teknik Mesin' ) { echo "selected"; } ?>>Teknik Mesin</option>

                                                <option <?php if ($prodi=='Agribisnis' ) { echo "selected"; } ?>>Agribisnis</option>
                                                <option <?php if ($prodi=='Agroekoteknologi' ) { echo "selected"; } ?>>Agroekoteknologi</option>
                                                <option <?php if ($prodi=='Budidaya Perairan' ) { echo "selected"; } ?>>Budidaya Perairan</option>

                                                <option <?php if ($prodi=='Pendidikan Dokter' ) { echo "selected"; } ?>>Pendidikan Dokter</option>
                                                <option <?php if ($prodi=='Pendidikan Kimia' ) { echo "selected"; } ?>>Pendidikan Kimia</option>
                                                <option <?php if ($prodi=='Pendidikan Fisika' ) { echo "selected"; } ?>>Pendidikan Fisika</option>
                                                <option <?php if ($prodi=='Pendidikan Matematika' ) { echo "selected"; } ?>>Pendidikan Matematika</option>
                                                <option <?php if ($prodi=='Pendidikan Teknik Mesin' ) { echo "selected"; } ?>>Pendidikan Teknik Mesin</option>

                                                <option <?php if ($prodi=='Akuntansi' ) { echo "selected"; } ?>>Akuntansi</option>
                                                <option <?php if ($prodi=='Antropologi' ) { echo "selected"; } ?>>Antropologi</option>
                                                <option <?php if ($prodi=='Ekonomi Islam' ) { echo "selected"; } ?>>Ekonomi Islam</option>
                                                <option <?php if ($prodi=='Ilmu Administrasi Negara' ) { echo "selected"; } ?>>Ilmu Administrasi Negara</option>
                                                <option <?php if ($prodi=='Ilmu Ekonomi & Studi Pembangunan' ) { echo "selected"; } ?>>Ilmu Ekonomi & Studi Pembangunan</option>
                                                <option <?php if ($prodi=='Manajemen' ) { echo "selected"; } ?>>Manajemen</option>

                                                <option <?php if ($prodi=='Ilmu Hukum' ) { echo "selected"; } ?>>Ilmu Hukum</option>
                                                <option <?php if ($prodi=='Ilmu Komunikasi' ) { echo "selected"; } ?>>Ilmu Komunikasi</option>
                                                <option <?php if ($prodi=='Ilmu Politik' ) { echo "selected"; } ?>>Ilmu Politik</option>
                                                <option <?php if ($prodi=='Sosiologi' ) { echo "selected"; } ?>>Sosiologi</option>

                                                <option <?php if ($prodi=='Psikologi' ) { echo "selected"; } ?>>Psikologi</option>
                                                <option <?php if ($prodi=='Sastra Indonessia' ) { echo "selected"; } ?>>Sastra Indonessia</option>
                                            </select>
                                        </div>
                                    

                                    	<div class="jarak">

                                    <input type="submit" name="simpan" value="ubah" class="btn btn-primary">

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

		$sql = $koneksi->query("UPDATE tb_anggota set id_pengenal='$id_pengenal', nama='$nama', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', gender='$gender', no_hp='$no_hp', alamat='$alamat', email='$email', status='$status', prodi='$prodi' where id_pengenal='$id'");

		if ($sql) {
			?>
				<script type="text/javascript">

					alert ("Data Berhasil Diubah");
					window.location.href="?page=anggota";

				</script> 
					<?php
		}
	}
?>