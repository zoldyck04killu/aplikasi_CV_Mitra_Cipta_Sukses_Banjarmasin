<div class="card">
  <div class="panel-heading" style="background-color:#1ac295; text-align:center; height:80px; line-height:80px;color:white;font-weight:bold;font-size:24px;">
    <div class="panel-title">Pemesanan Barang</div>
  </div>
  <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-12 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info">
            <div class="panel-body" >
              <form action="" method="post">
                <div class="form-group">
                  <label for="exampleFormControlInput1">Nama</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" name="nama">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Alamat</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" name="alamat">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Barang</label>
                  <select class="form-control" id="exampleFormControlSelect1" name="jenis_bahan">
                    <?php
                    $data = $objAdmin->showBarang();
                    while ($a = $data->fetch_object()) {
                    ?>
                    <option value="<?= $a->kode_barang ?>"><?= $a->nama_barang ?></option>
                    <?php
                    }
                    ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Ukuran</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" name="ukuran">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">No HP</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" name="no_hp">
                </div>
                <button type="submit" class="btn btn-info" name="simpan">Pesan</button>
              </form>
            </div>
        </div>
    </div>
</div>
</div>
<?php

if (isset($_POST['simpan'])) {

  $nama 		  = $_POST['nama'];
	$alamat 		  = $_POST['alamat'];
  $jenis_bahan 		  = $_POST['jenis_bahan'];
  $ukuran 		  = $_POST['ukuran'];
  $no_hp 		  = $_POST['no_hp'];

	$insert = $objAdmin->pemesanan($nama, $alamat,$jenis_bahan,$ukuran,$no_hp);

	if ($insert) {
		echo '
			<script> alert("Terimakasih sudah memesan, selanjutnya kami akan menghubingi anda"); window.location="?view=home" </script>
		';
	}else{
		echo '
			<script> alert("Gagal") </script>
		';
	}
}
