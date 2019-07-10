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

                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Jumlah Beli</label>
                  <div class="col-sm-10">
                      <input class="form-control" type="text" placeholder="Jumlah Beli" id="jlh_beli">
                  </div>
                </div>
                <script type="text/javascript">
                $(document).ready(function(){
                    $("#jlh_beli").focusout(function(){
                      var jlh_beli = document.getElementById('jlh_beli').value;
                      var input_kode_buku = '<div class="form-group row"><label for="staticEmail" class="col-sm-2 col-form-label">Kode Buku</label><div class="col-sm-10"><input name="kode[i]" class="form-control" type="text" placeholder="Kode Detail Buku"></div></div>'
                      for (var i = 0; i < jlh_beli; i++) {
                        // var x = 2;
                        $("#input_kode_buku").append('  <div class="form-group"> ' +
                            '<label for="exampleFormControlSelect1">Barang</label> ' +
                            '<select class="form-control" id="pilihBarang'+i+'" name="jenis_bahan['+ i +']">' +
                            '  <option value="0">Pilih Barang</option> <?php $data = $objAdmin->showBarang();  while ($a = $data->fetch_object()) { ?>' +
                            '  <option value="<?= $a->kode_barang ?>"><?= $a->nama_barang ?></option>' +
                            '<?php } ?>' +
                            '</select></div>' +
                          '<div class="form-group">' +
                            '<label> Harga Barang Rp. </label>' +
                            '<input type="number" class="form-control" id="harga'+i+ '" name="harga['+i+']" disabled>' +
                          '</div>' +
                          '<div class="form-group">' +
                            '<label> Ukuran Lebar </label>' +
                            '<input type="text" class="form-control" name="ukuranLebar['+i+']" >' +
                          '</div>' +
                          '<div class="form-group">' +
                            '<label> Ukuran Tinggi </label>' +
                            '<input type="text" class="form-control" name="ukuranTinggi['+i+']" >' +
                          '</div>');


                      }

                      d = 0;
                      c = 0;

                      for (var b = 0; b < jlh_beli; b++) {
                        console.log(b);
                        $('#pilihBarang'+b).on('change', function(){
                          // for (var c = 0; c < jlh_beli; c++) {
                            // c++;
                            // c = 0;
                            console.log("pertama "+ c);
                            // id = '#pilihBarang' + i;
                            let kode_brg = $('#pilihBarang'+c).val();
                              $.ajax({
                                url: '<?=base_url()?>/models/ajax.php',
                                type: 'POST',
                                dataType: 'JSON',
                                data: {type: 'get_harga', kode_brg: kode_brg},
                                  success: function(res){
                                    console.log("didalam ajax " +d);
                                    $('#harga'+d).val(res['harga']);
                                    d++;
                                  }
                              });
                              c++;
                              console.log("dilluar ajax  " + c);
                            // }
                        });
                      }

                    });
                });
                </script>
                <div id="input_kode_buku"></div>

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
  $ukuranTinggi 		  = $_POST['ukuranTinggi'];
  $ukuranLebar 		  = $_POST['ukuranLebar'];
  $no_hp 		  = $_POST['no_hp'];

  $banyak_data = count($jenis_bahan);
  // $banyak_data = $banyak_data - 1;
  for ($i=0; $i < $banyak_data ; $i++) {

    // $id_buku = $kode[$i];
    // $objAdmin->kurangiBuku($id_buku);
    // $savePeminjaman = $objAdmin->savePeminjaman($id_anggota, $nama_anggota, $nip, $tgl_pinjam, $tgl_kembali, $kode[$i]);
    $jenis_bahan_per = $jenis_bahan[$i];
    $ukuranTinggi_per = $ukuranTinggi[$i];
    $ukuranLebar_per = $ukuranLebar[$i];
    // echo $jenis_bahan_per. " ". $ukuranLebar_per." ". $ukuranTinggi_per;
    // die();

    $insert = $objAdmin->pemesanan($nama, $alamat,$jenis_bahan_per,$ukuranTinggi_per,$ukuranLebar_per,$no_hp);
  }

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



?>


<script type="text/javascript">

  $(document).ready(function(){
    // function check_harga () {

      // $('#pilihBarang0').on('change', function(){
          // let kode_brg = $('#pilihBarang').val();
          // console.log(kode_brg);
          //   $.ajax({
          //     url: '<?php// base_url()?>/models/ajax.php',
          //     type: 'POST',
          //     dataType: 'JSON',
          //     data: {type: 'get_harga', kode_brg: kode_brg},
          //       success: function(res){
          //         for (var b = 0; b < jlh_beli; b++) {
          //           console.log(b);
          //           $('#harga').val(res['harga']);
          //         }
          //       }
          //   });
      // });
    // }

  });

</script>
