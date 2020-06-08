<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <a href="?page=buku-tambah" class="btn btn-primary" style="margin-top: 8px;"><i class="fa fa-plus"></i> Tambah Buku</a>
            <div class="panel-heading">
                Tabel Data Buku
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Pengarang</th>
                                <th>Penerbit</th>
                                <th>Tahun</th>
                                <th>ISBN</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                                <th>Pembelian</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php

                            error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

                            $no = 1;

                            $sql = $koneksi->query("select * from tb_buku");

                            while ($data=$sql->fetch_assoc()) {


                                ?>

                                <tr>
                                   <td><?php echo $no++; ?></td>
                                   <td><?php echo $data['judul'];?></td>
                                   <td><?php echo $data['pengarang'];?></td>
                                   <td><?php echo $data['penerbit'];?></td>
                                   <td><?php echo $data['tahun_terbit'];?></td>
                                   <td><?php echo $data['isbn'];?></td>
                                   <td><?php echo $data['jumlah'];?></td>
                                   <td><?php echo $data['harga'];?></td>
                                   <td><?php echo $data['tgl_beli'];?></td>
                                   <td>
                                      <a href="?page=buku-ubah&id=<?php echo $data['id_buku']; ?>" class="btn btn-success"><i class="fa fa-edit" name="submit-ubah"></i> Ubah</a>
                                      <a onclick="return confirm('Data Akan Dihapus, Anda Yakin?')" href="?page=buku-hapus&id=<?php echo $data['id_buku']; ?>" class="btn btn-danger"><i class="fa fa-remove"></i> Hapus</a>


                                  </td>
                              </tr>


                          <?php } ?>
                      </tbody>
                  </table>
              </div>

              

          </div>
      </div>
  </div>
</div>