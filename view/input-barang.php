<div class="card">
  <div class="panel-heading" style="background-color:#1ac295; text-align:center; height:80px; line-height:80px;color:white;font-weight:bold;font-size:24px;">
    <div class="panel-title">Input Barang</div>
  </div>
  <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-12 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info">
            <div class="panel-body" >
              <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="exampleFormControlInput1">Nama Barang</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" name="barang">
                </div>
                 <div class="form-group">
                  <label for="exampleFormControlInput1">Gambar Barang</label>
                  <input type="file" class="form-control" id="exampleFormControlInput1" name="gambar">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Type Barang</label>
                  <select class="form-control" id="exampleFormControlSelect1" name="jenis_bahan">
                    <?php
                    $data = $objAdmin->showJenisBahan();
                    while ($a = $data->fetch_object()) {
                    ?>
                    <option value="<?= $a->kode_jenis_bahan ?>"><?= $a->jenis_bahan ?></option>
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
                    <option value="<?= $a->id_kategori ?>"><?= $a->nama_kategori ?></option>
                    <?php
                    }
                    ?>
                  </select>
                </div>
                <div class="from-group">
                  <label> Harga Barang </label>
                  <input type="number" class="form-control" name="harga">
                </div>
                 <div class="form-group">
                  <label for="exampleFormControlInput1">Keterangan Barang</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" name="keterangan">
                </div>
                <br>
                <button type="submit" class="btn btn-info" name="simpan">Simpan</button>
              </form>
            </div>
        </div>
    </div>
</div>
</div>
<?php

if (isset($_POST['simpan'])) {

  $barang 		      = $_POST['barang'];
  $gambar           = $_FILES['gambar']['name'];
	$jenis_bahan 		  = $_POST['jenis_bahan'];
  $kategori 		    = $_POST['kategori'];
  $harga            = $_POST['harga'];
  $keterangan       = $_POST['keterangan'];

  $tmp_name = $_FILES['gambar']['tmp_name'];
  $format   = "Img-".round(microtime(true)). "";  
  $ext      = pathinfo($gambar, PATHINFO_EXTENSION);
  move_uploaded_file($tmp_name, "./assets/image/".$nama_gambar = $format.rand(10, 100).".".$ext);


	$insert = $objAdmin->insertBarang($barang, $nama_gambar, $jenis_bahan, $kategori, $harga, $keterangan);

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
