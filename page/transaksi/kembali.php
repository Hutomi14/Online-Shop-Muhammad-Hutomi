<?php 

 $id_pinjam = $_GET['id_pinjam'];
 $id_buku = $_GET['id_buku'];
 
 $sql = $koneksi->query(" UPDATE tb_pinjam set status='Kembali' where id_pinjam='$id_pinjam'");

 $sqlx = $koneksi->query(" UPDATE tb_buku set jumlah=(jumlah+1) where id_buku='$id_buku'");

 ?>
 	<script type="text/javascript">
 		alert("Berhasil Kembalikan Buku");
 		window.location.href="?page=transaksi";
 		</script>
 <?php  ?>