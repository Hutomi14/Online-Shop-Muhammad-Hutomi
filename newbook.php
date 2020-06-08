
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">20 Koleksi Terbaru</h4>
                </div>
            </div>
                     
            
                    
                            <!-- ini tadi yg ku edit-->
                            <?php 


                                            $no = 1;
                                            $judul=$_POST['keysearh'];
                                            $sql = $koneksi->query("SELECT * FROM `tb_buku` ORDER by `id_buku` DESC Limit 20");

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
                                   
                        </a>
                        
                    </div>


              