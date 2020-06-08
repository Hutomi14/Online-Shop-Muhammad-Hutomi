<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tabel Peminjaman Buku
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>  
                                        	<th>No</th>
                                            <th>ID_Buku</th>
                                            <th>Judul_Buku</th>
                                            <th>ID_Anggota</th>
                                            <th>Tanggal_Pinjam</th>
                                            <th>Tanggal_Kembali</th>
                                            <th>Terlambat</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php

                                        error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

                                        $no = 1;

                                        $sql = $koneksi->query("SELECT * from tb_pinjam where status='Pinjam'");

                                        while ($data=$sql->fetch_assoc()) {

                                            

                                    ?>

                                        <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $data['id_buku'];?></td>
                                        <td><?php echo $data['judul'];?></td>
                                        <td><?php echo $data['id_anggota'];?></td>
                                        <td><?php echo $data['tanggal_pinjam'];?></td>
                                        <td><?php echo $data['tanggal_kembali'];?></td>
                                        <td>
                                        
                                        <?php 


                                            $denda = 500;

                                        	$tgl_dateline = $data['tanggal_kembali'];
                                        	$tgl_kembali = date ('d-m-Y');

                                        	$lambat = terlambat($tgl_dateline, $tgl_kembali);
                                        	$denda1 = $lambat * $denda;

                                        	if ($lambat>0){
                                        		echo "

                                        		<font color='red'>$lambat hari<br>(Rp. $denda1)</font>

                                        		";
                                        	}else{
                                        		echo $lambat ." Hari";
                                        	}
                                        ?>

                                        </td>
                                        <td><?php echo $data['status'];?></td>
                                        <td>
                                            <a href="?page=transaksi-kembali&id_pinjam=<?php echo $data['id_pinjam'];?>&id_buku=<?php echo $data['id_buku'];?>" class="btn btn-success" ><i class="fa fa-check-circle-o"></i> Kembali</a>
                                            <a href="?page=transaksi-perpanjang&id_pinjam=<?php echo $data['id_pinjam']; ?>&lambat=<?php echo $lambat ?>&tgl_kembali=<?php echo $data['tanggal_kembali'];?>&id_buku=<?php echo $data['id_buku'];?>" class="btn btn-warning" ><i class="fa fa-random"></i> Perpanjang</a>


                                        </td>
                                        </tr>


                                        <?php } ?>
                                    </tbody>
                                    </table>
                                    </div>

                                    <a href="?page=transaksi-tambah" class="btn btn-primary" style="margin-top: 8px;"><i class="fa fa-plus"></i> Tambah Data</a>

                                
                                </div>
                            </div>
                    </div>
        </div>
