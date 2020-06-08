<?php

	$id = $_GET['id'];

	$sql = $koneksi->query("select * from tb_user where id='$id'");

	$tampil = $sql->fetch_assoc();

?>

<div class="panel panel-default">
<div class="panel-heading">
UPDATE DATA BUKU
</div>
<div class="panel-body">
        <div class="row">
            <div class="col-md-5">

                <form method="POST">
                    <div class="form-group">
                        <label>Username</label>
                        <input class="form-control" name="username" value="<?php echo $tampil['username'];?>" />

                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input class="form-control" name="password" value="<?php echo $tampil['password'];?>" />

                    </div>

                    <div class="form-group">
                        <label>nama</label>
                        <input class="form-control" name="nama" value="<?php echo $tampil['nama'];?>" />

                    </div>

                    <div class="form-group">
                        <label>level</label>
                        <input class="form-control" name="level" value="<?php echo $tampil['level'];?>" />

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

	$username = $_POST ['username'];
	$password = $_POST ['password'];
	$nama = $_POST ['nama'];
	$level = $_POST ['level'];

	$simpan = $_POST ['simpan'];

	if ($simpan) {

		$sql = $koneksi->query("update tb_user set username='$username', password='$password', nama='$nama', level='$level' where id='$id'");

		if ($sql) {
			?>
				<script type="text/javascript">

					alert ("Data Berhasil Diupdate");
					window.location.href="?page=users";

				</script> 
					<?php
		}
	}


?>