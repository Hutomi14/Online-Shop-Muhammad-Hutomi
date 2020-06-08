<div class="panel panel-default">
<div class="panel-heading">
TAMBAH PENGGUNA
</div>
<div class="panel-body">
        <div class="row">
            <div class="col-md-5">

                <form method="POST">
                    <div class="form-group">
                        <label>Username</label>
                        <input class="form-control" name="username" />

                    </div>

                     <div class="form-group">
                        <label>Password</label>
                        <input class="form-control" name="password" />

                    </div>

                     <div class="form-group">
                        <label>Nama</label>
                        <input class="form-control" name="nama" />

                    </div>

                     <div class="form-group">
                        <label>Level</label>
                        <input class="form-control" name="level" />

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

		$sql = $koneksi->query("insert into tb_user (username, password, nama, level) values('$username','$password','$nama','$level')");

		if ($sql) {
			?>
				<script type="text/javascript">

					alert ("Data Berhasil Disimpan");
					window.location.href="?page=users";

				</script> 
					<?php
		}
	}


?>