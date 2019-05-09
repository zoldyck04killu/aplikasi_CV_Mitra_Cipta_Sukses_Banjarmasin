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
    Barang : 
    <?php
    $id_kategori = $kategori->id_kategori;
    $dataBarang = $objAdmin->showBarangKategori($id_kategori);
    while ($barang = $dataBarang->fetch_object()) {
    ?>
    <ul>
      <li>
        <?=$barang->nama_barang ?>
      </li>
    </ul>
  <?php } ?>
  <?php } ?>

  </div>
</div>
