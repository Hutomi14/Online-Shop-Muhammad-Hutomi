<div class="panel panel-default">
    <div class="panel-heading">
        TAMBAH BUKU
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-10">

                <form method="POST">
                    <div class="form-group">
                        <label>Judul</label>
                        <input class="form-control" name="judul" />

                    </div>

                    <div class="form-group">
                        <label>Pengarang</label>
                        <input class="form-control" name="pengarang" />

                    </div>

                    <div class="form-group">
                        <label>Penerbit</label>
                        <input class="form-control" name="penerbit" />

                    </div>

                    <div class="form-group">
                        <label>Tahun Terbit</label>
                        <select class="form-control" name="tahun_terbit">
                         <?php

                         $tahun = date("Y");

                         for ($i=$tahun-30; $i <= $tahun ; $i++) {
                           echo '

                           <option value="'.$i.'">'.$i.'</option>

                           ';

                       }


                       ?>
                   </select>
               </div>

               <div class="form-group">
                <label>ISBN</label>
                <input class="form-control" name="isbn" />

            </div>

            <div class="form-group">
                <label>Jumlah Buku</label>
                <input class="form-control" type="number" name="jumlah" />

            </div>

            <div class="form-group">
                <label>Harga</label>
                <input class="form-control" name="harga" type="text" />

            </div>

            <div class="form-group">
                <label>Tanggal Input</label>
                <input class="form-control" name="tanggal" type="date" />

            </div>

            <div>

                <input type="submit" name="simpan" value="simpan" class="btn btn-primary">

            </div>
        </div>
    </form>
</div>
</div>
</div>


<?php

$judul = $_POST ['judul'];
$pengarang = $_POST ['pengarang'];
$penerbit = $_POST ['penerbit'];
$tahun = $_POST ['tahun_terbit'];
$isbn = $_POST ['isbn'];
$jumlah = $_POST ['jumlah'];
$harga = $_POST ['harga'];
$tanggal = $_POST ['tanggal'];

$simpan = $_POST ['simpan'];

if ($simpan) {

  $sql = $koneksi->query("INSERT into tb_buku (judul, pengarang, penerbit, tahun_terbit, isbn, jumlah, harga, tgl_beli) VALUES('$judul','$pengarang','$penerbit','$tahun','$isbn','$jumlah','$harga','$tanggal')");

  if ($sql) {
     ?>
     <script type="text/javascript">

       alert ("Data Berhasil Disimpan");
       window.location.href="?page=buku";

   </script> 
   <?php
}
}


?>