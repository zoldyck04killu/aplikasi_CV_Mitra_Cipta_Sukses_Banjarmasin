<?php 

$id_bahan = @$_GET['id_bahan'];

$edit = $objAdmin->editBahan($id_bahan)->fetch_object();

 ?>


 <div class="card">
  <div class="panel-heading" style="background-color:#1ac295; text-align:center; height:80px; line-height:80px;color:white;font-weight:bold;font-size:24px;">
    <div class="panel-title">Edit Jenis Bahan</div>
  </div>
  <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-12 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info">
            <div class="panel-body" >
              <form action="" method="post">
                <!-- <div class="form-group">
                  <label for="exampleFormControlInput1">Kode Bahan</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" name="kode_jenis">
                </div> -->
                <div class="form-group">
                  <label for="exampleFormControlInput1">Harga Bahan</label>
                  <input type="hidden" name="id" value="<?=$edit->kode_jenis_bahan ?>">
                  <input type="text" class="form-control" id="exampleFormControlInput1" name="harga" value="<?=$edit->harga_bahan ?>">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Jenis Bahan</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" name="jenis" value="<?=$edit->jenis_bahan ?>">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Ukuran Bahan</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" name="ukuran" value="<?=$edit->ukuran_bahan ?>">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Keterangan</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" name="keterangan" value="<?=$edit->ketarangan ?>">
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

  	$kd_bahan     = $_POST['id'];
	$harga 		  = $_POST['harga'];
	$jenis        = $_POST['jenis'];
	$ukuran    	  = $_POST['ukuran'];
	$keterangan   = $_POST['keterangan'];

	$update = $objAdmin->udapteJenisBahan($kd_bahan, $harga, $jenis, $ukuran, $keterangan);

	if ($update) {
		echo '
			<script> alert("Berhasil"); window.location="?view=bahan"; </script>
		';
	}else{
		echo '
			<script> alert("Gagal") </script>
		';
	}
}
