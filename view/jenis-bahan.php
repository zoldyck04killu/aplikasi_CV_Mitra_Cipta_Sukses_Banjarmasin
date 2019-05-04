<div class="header-hal">
    <a href="?view=input-bahan" class="btn btn-sm btn-primary">Input Jenis Bahan</a>
</div>
<div class="container mt-5">

<div class="daftar-table table-responsive">
  <table class="table table-striped text-center" id="table">
    <thead class="thead-dark">
      <tr>
        <th>Kode Jenis Bahan</th>
        <th>Harga Bahan</th>
        <th>Jenis Bahan </th>
        <th>Ukuran Bahan</th>
        <th>Keterangan</th>

        <th>PILIHAN</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $data = $objAdmin->showJenisBahan();
      while ($a = $data->fetch_object()) {
      ?>
      <tr>
        <td><?=$a->kode_jenis_bahan ?></td>
        <td><?=$rp = "Rp " . number_format($a->harga_bahan, 2, ',', '.')?></td>
        <td><?=$a->jenis_bahan ?></td>
        <td><?=$a->ukuran_bahan ?></td>
        <td><?=$a->ketarangan ?></td>

        <td>
          <div class="btn-group">
            <a href="?view=edit-jenis-bahan&id_bahan=<?=$a->kode_jenis_bahan ?>" class="btn btn-sm btn-info">Edit</a>
            <a href="?view=hapus-jenis-bahan&id_bahan=<?=$a->kode_jenis_bahan ?>" onclick="return confirm('Hapus data ?')" class="btn btn-sm btn-danger">Hapus</a>
          </div>
        </td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
</div>
</div>
