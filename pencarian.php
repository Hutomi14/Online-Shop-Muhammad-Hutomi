
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Pencarian Buku</h4>
                </div>
            </div>
                     
            <div class="Compose-Message">               
                <div class="panel panel-success">
                    <div class="panel-heading">
                        Masukan Kata Kunci Pencarian
                    </div>
                    <div class="panel-body">
                        <div class="col-xs-4">
                        <form method="POST">
                        <input class="form-control" name="keysearh1" id="ex3" type="text">
                        </div>
                        <input type="submit" value="Telusuri" class="btn btn-success">
                        <!--<a class="btn btn-success"><span class="glyphicon glyphicon-search"></span>  Telusuri </a>-->
                        </form>
                       

                    </div>
                    <div class="list-group">
                        
                            <!-- ini tadi yg ku edit-->
                            <?php 


                                            $no = 1;
                                            $cari=$_POST['keysearh1'];
                                                                                        
                                           /* $sql = $koneksi->query("SELECT judul, pengarang,tahun_terbit FROM `tb_buku` WHERE `judul` LIKE '%$judul%'");

                                            $tampil = $sql->fetch_assoc();*/
                                            if($cari!=''){
                                                $select = mysqli_query($koneksi,"SELECT id_buku,judul, pengarang,tahun_terbit FROM `tb_buku` WHERE `judul` LIKE '%".$cari."%' ");
                                                $jumlah = mysqli_num_rows($select);
                                                echo '<p>Ada <font size=4 color="brown">"'.$jumlah.'"</font> data yang sesuai dengan kata kunci <font color="brown" size=4>"'.$cari.'"</font>.</p>'; 

                                            }else {
                                                echo '<p><font size=4 color="brown">"Masukan judul buku yang ingin dicari!"</font></p>';
                                            }

                                            while ($tampil = mysqli_fetch_array($select)) {
                                        ?>
                                            
                                            
                                        <a href="?page=buku-detill&id=<?php echo $tampil['id_buku']; ?>" class="list-group-item" data-toggle="modal" data-target="#exampleModal" >
                                            <table>
                                                <tr>
                                                    <td><?php echo $no++ ?></td>
                                                    <td>
                                                        <div id="box">
                                                        <div name="judul"><h4><font color="blue"><?php echo $tampil['judul']; ?></font></h4></div>
                                                        <div name="pengarang"><?php echo $tampil['pengarang']; ?></div>
                                                        <div name="tahun_terbit"><?php echo $tampil['tahun_terbit']; ?></div>
                                                    </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </a>
                    
                                       
                                <?php }?>
                                       
                                   </div>
                       
                    </div>


                    
                </div>
            </div>
        </div>
    </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    