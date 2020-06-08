<a href="?page=daftarbuku&aksi=tambah" class="btn btn-primary" style="margin-bottom: 5px">Tambah Buku</a>
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Daftar Buku
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>ID</th>
                                            <th>JUDUL</th>
                                            <th>PENGARANG</th>
                                            <th>PENERBIT</th>
                                            <th>TAHUN</th>
                                            <th>ISBN</th>
                                            <th>JUMLAH</th>
                                            <th>HARGA</th>
                                            <th>TANGGAL BELI</th>
                                            <th>AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php 


                                            $no = 1;

                                            $sql = $koneksi->query("select * from tb_buku");
                                            while ($data = $sql->fetch_assoc()) {
                                                
                                            
                                        ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $data['id_buku']; ?></td>
                                                <td><?php echo $data['judul']; ?></td>
                                                <td><?php echo $data['pengarang']; ?></td>
                                                <td><?php echo $data['penerbit']; ?></td>
                                                <td><?php echo $data['tahun_terbit']; ?></td>
                                                <td><?php echo $data['isbn']; ?></td>
                                                <td><?php echo $data['jumlah']; ?></td>
                                                <td><?php echo $data['harga']; ?></td>
                                                <td><?php echo $data['tgl_beli']; ?></td>
                                                <td>
                                                    <a href="" class="btn btn-info">Edit</a>
                                                    <a href="" class="btn btn-danger">Hapus</a>
                                                </td>
                                                    
                                            </tr>
                                        <?php  } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>