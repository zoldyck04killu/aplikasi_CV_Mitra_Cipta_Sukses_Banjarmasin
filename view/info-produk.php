<div class="card">
  <div class="card-header">
    Info Produk
  </div>
  <div class="card-body">
    <?php
    $dataKategori = $objAdmin->showKategori();
    while ($kategori = $dataKategori->fetch_object()) {
    ?>
    <h3 class="card-title">Kategori : <?=$kategori->nama_kategori ?></h3>
    Barang : <span style="float: right;">Harga :</span> <hr>
    <?php
    $id_kategori = $kategori->id_kategori;
    $dataBarang = $objAdmin->showBarangKategori($id_kategori);
    while ($barang = $dataBarang->fetch_object()) {
    ?>
    <div class="alert alert-info" role="alert">
      <b> <a href="?view=detail&barang=<?=$barang->kode_barang ?>" title=""><?=$barang->nama_barang ?></a> </b> <b style="float: right;"><?php $rp = "Rp " . number_format($barang->harga,2,',','.'); echo $rp; ?></b>
    </div>
   <?php } ?>
  <?php } ?>

  </div>
</div>
