<div class="card">
  <div class="panel-heading" style="background-color:#1ac295; text-align:center; height:80px; line-height:80px;color:white;font-weight:bold;font-size:24px;">
    <div class="panel-title">Input Kategori</div>
  </div>
  <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-12 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info">
            <div class="panel-body" >
              <form action="" method="post">
                <div class="form-group">
                  <label for="exampleFormControlInput1">Nama Kategori</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" name="nama_kategori">
                </div>

                <button type="submit" class="btn btn-info" name="simpan">Simpan</button>
              </form>
            </div>
        </div>
    </div>
</div>
</div>
<?php

if (isset($_POST['simpan'])) {

	$nama_kategori 		  = $_POST['nama_kategori'];

	$insert = $objAdmin->insertKategori($nama_kategori);

	if ($insert) {
		echo '
			<script> alert("Berhasil") </script>
		';
	}else{
		echo '
			<script> alert("Gagal") </script>
		';
	}
}
