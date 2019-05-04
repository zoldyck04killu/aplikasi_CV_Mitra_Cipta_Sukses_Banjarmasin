<?php 

$id = @$_GET['id_brg'];

$edit = $objAdmin->edit_brg($id)->fetch_object();

 ?>




 <div class="card">
  <div class="panel-heading" style="background-color:#1ac295; text-align:center; height:80px; line-height:80px;color:white;font-weight:bold;font-size:24px;">
    <div class="panel-title">Edit Barang</div>
  </div>
  <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-12 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info">
            <div class="panel-body" >
              <form action="" method="post">
                <div class="form-group">
                  <label for="exampleFormControlInput1">Nama Barang</label>
                  <input type="hidden" name="id" value="<?=$edit->kode_barang ?>">
                  <input type="text" class="form-control" id="exampleFormControlInput1" name="barang" value="<?=$edit->nama_barang ?>">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Type Barang</label>
                  <select class="form-control" id="exampleFormControlSelect1" name="jenis_bahan">
                    <?php
                    $data = $objAdmin->showJenisBahan();
                    while ($a = $data->fetch_object()) {
                    ?>
                    	<option <?= ($edit->type_barang == $a->kode_jenis_bahan ? "selected" : " " ); ?> value="<?=$a->kode_jenis_bahan ?>"><?=$a->jenis_bahan ?></option>

                    <?php
                    }
                    ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Kategori</label>
                  <select class="form-control" id="exampleFormControlSelect1" name="kategori">
                    <?php
                    $data = $objAdmin->showKategori();
                    while ($a = $data->fetch_object()) {
                    ?>
                   		<option <?=($edit->kategori == $a->id_kategori ? "selected" : "") ?> value="<?=$a->id_kategori ?>"><?=$a->nama_kategori ?></option>
                    <?php
                    }
                    ?>
                  </select>
                </div>
                <button type="submit" class="btn btn-info" name="update">Update</button>
              </form>
            </div>
        </div>
    </div>
</div>
</div>
<?php

if (isset($_POST['update'])) {

  $kd_brg       = $_POST['id'];
  $barang 		= $_POST['barang'];
  $jenis_bahan 	= $_POST['jenis_bahan'];
  $kategori     = $_POST['kategori'];


	$update = $objAdmin->updateBarang($kd_brg, $barang, $jenis_bahan,$kategori);

	if ($update) {
		echo '
			<script> alert("Berhasil"); window.location="?view=barang" </script>
		';
	}else{
		echo '
			<script> alert("Gagal") </script>
		';
	}
}
