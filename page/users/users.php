<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tabel Data Pengguna
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Nama</th>
                                            <th>Level</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php

                                    	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

                                    	$no = 1;

                                    	$sql = $koneksi->query("select * from tb_user where level !='admin'");

                                    	while ($data=$sql->fetch_assoc()) {


                                    ?>

                                    	<tr>
                                    	<td><?php echo $no++; ?></td>
                                    	<td><?php echo $data['username'];?></td>
                                    	<td><?php echo $data['password'];?></td>
                                    	<td><?php echo $data['nama'];?></td>
                                    	<td><?php echo $data['level'];?></td>
                                    	<td>
                                    		<a href="?page=users&aksi=ubah&id=<?php echo $data['id']; ?>" class="btn btn-success"><i class="fa fa-edit"></i> Ubah</a>
                                    		<a onclick="return confirm('Hapus User ini?')" href="?page=users&aksi=hapus&id=<?php echo $data['id']; ?>" class="btn btn-danger"><i class="fa fa-remove"></i> Hapus</a>


                                    	</td>
                                    	</tr>

                                    	<?php } ?>
                                    </tbody>
                                    </table>
                                    </div>

                                    <a href="?page=users&aksi=tambah" class="btn btn-primary" style="margin-top: 8px;"><i class="fa fa-plus"></i> Tambah Pengguna</a>

                                   
                                </div>
                            </div>
                    </div>
        </div>