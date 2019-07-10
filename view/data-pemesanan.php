
<div class="btn-group">
  <a href="view/laporan/laporan-pemesanan.php" class="btn btn-sm btn-dark">Cetak</a>
</div>
<div class="container mt-5">
<div class="daftar-table table-responsive">
  <table class="table table-striped text-center" id="table">
    <thead class="thead-dark">
      <tr>
        <th>Kode Pemesanan</th>
        <th>Nama Pemesan</th>
        <th>Alamat </th>
        <th>Barang </th>
        <th>Ukuran Tinggi</th>
        <th>Ukuran Lebar</th>

        <th>No HP </th>
        <th>Harga</th>

        <th>PILIHAN</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $data = $objAdmin->showPemesanan();
      while ($a = $data->fetch_object()) {
      ?>
      <tr>
        <td><?=$a->kode_pemesanan ?></td>
        <td><?=$a->nama_pemesan ?></td>
        <td><?=$a->alamat ?></td>
        <td><?=$a->nama_barang ?></td>
        <td><?=$a->ukuran_tinggi ?></td>
        <td><?=$a->ukuran_lebar ?></td>

        <td><?=$a->no_hp ?></td>
        <td>
          <?php $rp = "Rp " . number_format($a->harga,2,',','.'); echo $rp; ?>
        </td>

        <td>
          <div class="btn-group">
            <a href="?view=hapus-pemesanan&id-pesan=<?=$a->kode_pemesanan ?>" onclick="return confirm('Hapus data ?')" class="btn btn-sm btn-danger">Hapus</a>
          </div>
        </td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
</div>
</div>
