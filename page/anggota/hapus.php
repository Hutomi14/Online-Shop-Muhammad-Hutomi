<?php

	$id = $_GET['id'];

	$koneksi->query("DELETE from tb_anggota where id_pengenal = '$id'");

?>

<script type="text/javascript">
		window.location.href="?page=anggota";
		</script>