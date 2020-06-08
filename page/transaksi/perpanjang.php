<?php 

		$id_pinjam = $_GET['id_pinjam'];
		$id_buku = $_GET['id_buku'];
		$tgl_kembali = $_GET['tgl_kembali'];
		$lambat = $_GET['lambat'];

		if ($lambat > 7) {
			?>

				<script type="text/javascript">

				alert("Buku Tidak Dapat Diperpanjang, Sudah Terlambat 1 Minggu, Anda Harus Meminjam Ulang Bukunya :)");
				window.location.href="?page=transaksi";

				</script>

				<?php
		}else {

			$pecah_tgl_kembali = explode("-", $tgl_kembali);
			$next_7_hari = mktime(0,0,0, $pecah_tgl_kembali[1], $pecah_tgl_kembali[0]+7, $pecah_tgl_kembali[2]);
			$hari_next = date("d-m-Y", $next_7_hari);

			$sql = $koneksi->query("UPDATE tb_pinjam set tanggal_kembali='$hari_next' where id_pinjam='$id_pinjam'");

			if($sql){
				?>
				<script type="text/javascript">
					alert("Masa Peminjaman Diperpanjang");
					window.location.href="?page=transaksi";
				</script>
				<?php
			}else {
				?>
				<script type="text/javascript">
					alert("Masa Peminjaman Gagal Diperpanjang");
					window.location.href="?page=transaksi";
				</script>
				<?php
			}
		}
?>