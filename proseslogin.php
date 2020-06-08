<?php

$koneksi = new mysqli ("localhost","root","","db_perpustakaan");

$username = $_POST['inputusername'];
$password = $_POST['inputPassword'];


$query = mysqli_query($koneksi,"SELECT * from tb_anggota where id_pengenal='".$username."' and password='".$password."'");

		$rows = mysqli_num_rows($query);
			if ($rows == 1) {
				$_SESSION['login_user']=$username; // Membuat Sesi/session
				header("location: pralogin.php"); // Mengarahkan ke halaman profil
				} else {
					?>
				<script type="text/javascript">
					alert("Username atau Password Anda Salah, Silahkan Login Kembali");
					window.location.href="index.php";
				</script>
						<?php
				}

?>