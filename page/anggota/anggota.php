<div class="row">
<div class="col-md-12">
    <!-- Advanced Tables -->
<div class="panel panel-default">
<div class="panel-heading">
    Tabel Data Anggota
</div>
<div class="panel-body">
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr>  
                    <th>No</th>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Tempat_Lahir</th>
                    <th>Tanggal_Lahir</th>
                    <th>Gender</th>
                    <th>No HP</th>
                    <th>Alamat</th>
                    <th>E-Mail</th>
                    <th>Status</th>
                    <th>Program_Studi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>

            <?php
                error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

                $no = 1;

                $sql = $koneksi->query("SELECT * from tb_anggota order by id_pengenal ASC");

                while ($data=$sql->fetch_assoc()) {


            ?>
                <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['id_pengenal'];?></td>
                <td><?php echo $data['nama'];?></td>
                <td><?php echo $data['tempat_lahir'];?></td>
                <td><?php echo $data['tanggal_lahir'];?></td>
                <td><?php echo $data['gender'];?></td>
                <td><?php echo $data['no_hp'];?></td>
                <td><?php echo $data['alamat'];?></td>
                <td><?php echo $data['email'];?></td>
                <td><?php echo $data['status'];?></td>
                <td><?php echo $data['prodi'];?></td>
                <td>
                    <a href="?page=anggota-ubah&id=<?php echo $data['id_pengenal']; ?>" class="btn btn-success" ><i class="fa fa-edit"></i> Ubah</a>

                    <a onclick="return confirm('Data Akan Dihapus, Anda Yakin?')" href="?page=anggota-hapus&id=<?php echo $data['id_pengenal']; ?>" class="btn btn-danger"><i class="fa fa-remove"></i> Hapus</a>


                </td>
                </tr>


                <?php } ?>
            </tbody>
            </table>

            </div>

            <a href="?page=anggota-tambah" class="btn btn-primary" style="margin-top: 8px;"><i class="fa fa-plus"></i> Tambah Anggota</a>

                        </div>
                    </div>
            </div>
        </div>