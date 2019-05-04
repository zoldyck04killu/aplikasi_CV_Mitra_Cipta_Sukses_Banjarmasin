<?php 

$id_kategori = @$_GET['id_kategori'];

$edit = $objAdmin->editKategori($id_kategori)->fetch_object();

 ?>


 <div class="card">
  <div class="panel-heading" style="background-color:#1ac295; text-align:center; height:80px; line-height:80px;color:white;font-weight:bold;font-size:24px;">
    <div class="panel-title">Edit Kategori</div>
  </div>
  <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-12 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info">
            <div class="panel-body" >
              <form action="" method="post">
                <div class="form-group">
                  <label for="exampleFormControlInput1">Nama Kategori</label>
                  <input type="hidden" name="id" value="<?=$edit->id_kategori ?>">
                  <input type="text" class="form-control" id="exampleFormControlInput1" name="nama_kategori" value="<?=$edit->nama_kategori ?>">
                </div>

                <button type="submit" class="btn btn-info" name="update">Update</button>
                <hr>
              </form>
            </div>
        </div>
    </div>
</div>
</div>
<?php

if (isset($_POST['update'])) {

	$id_kategori          = $_POST['id'];
	$nama_kategori 		  = $_POST['nama_kategori'];

	$update = $objAdmin->updateKategori($id_kategori, $nama_kategori);

	if ($update) {
		echo '
			<script> alert("Berhasil"); window.location="?view=kategori"; </script>
		';
	}else{
		echo '
			<script> alert("Gagal") </script>
		';
	}
}
