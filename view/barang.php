<div class="header-hal">
    <a href="?view=input-barang" class="btn btn-sm btn-primary">Input Barang</a>
</div>
<div class="container mt-5">

<div class="daftar-table table-responsive">
  <table class="table table-striped text-center" id="table">
    <thead class="thead-dark">
      <tr>
        <th>Kode Barang</th>
        <th>Nama Barang</th>
        <th>Jenis Bahan </th>
        <th>Kategori </th>
        <th>Harga</th>

        <th>PILIHAN</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $data = $objAdmin->showBarang();
      while ($a = $data->fetch_object()) {
      ?>
      <tr>
        <td><?=$a->kode_barang ?></td>
        <td><?=$a->nama_barang ?></td>
        <td><?=$a->jenis_bahan ?></td>
        <td><?=$a->nama_kategori ?></td>
        <td><?php $rp = "Rp " . number_format($a->harga,2,',','.'); echo $rp; ?></td>


        <td>
          <div class="btn-group">
            <a href="?view=edit-barang&id_brg=<?=$a->kode_barang ?>" class="btn btn-sm btn-info">Edit</a>
            <a href="?view=hapus-barang&id_brg=<?=$a->kode_barang ?>" onclick="return confirm('Hapus data ?')" class="btn btn-sm btn-danger">Hapus</a>
          </div>
        </td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
</div>
</div>
