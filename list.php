
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Koleksi Terbaru</h4>
                </div>
            </div>
                     
            <div class="Compose-Message">               
                <div class="panel panel-success">
                    <div class="panel-heading">
                        Masukan Kata Kunci Pencarian
                    </div>
                    <div class="panel-body">
                        <div class="col-xs-4">
   
                        <input class="form-control" name="keysearh" id="ex3" type="text">
                        </div>
                        <a href="#" class="btn btn-success"><span class="glyphicon glyphicon-search"></span>  Telusuri </a>
                        

                    </div>
                    <div class="list-group">
                        <div>Ada <font color="brown">10</font> judul yang ditemukan untuk penelusuran berdasarkan pada kata kunci <font color="brown">nan</font>
                            <!-- ini tadi yg ku edit-->
                            <?php 


                                            $no = 1;
                                            $judul=$_POST['keysearh'];
                                            $sql = $koneksi->query("SELECT judul, pengarang,tahun_terbit FROM `tb_buku` WHERE `judul` LIKE '%$judul%'");

                                            while ($data = $sql->fetch_assoc()) {
                                                
                                            
                                        ?>
                        <a href="#" class="list-group-item">
                            <table>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td>
                                        <div id="box">
                                        <div name="judul"><h4><font color="blue"><?php echo $data['judul']; ?></font></h4></div>
                                        <div name="pengarang"><?php echo $data['pengarang']; ?></div>
                                        <div name="tahun_terbit"><?php echo $data['tahun_terbit']; ?></div>
                                    </div>
                                    </td>
                                </tr>
                            </table>
                    
                                       

                                        <?php  } ?>
                                   </div>
                        </a>
                        
                    </div>


                    
                </div>
            </div>
        </div>
    </div>


    