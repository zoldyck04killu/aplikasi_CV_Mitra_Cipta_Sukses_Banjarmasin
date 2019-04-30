<div class="header-hal">
    <a href="?view=input-kategori" class="btn btn-sm btn-primary">Input Kategori</a>
</div>
<div class="container mt-5">

<div class="daftar-table table-responsive">
  <table class="table table-striped text-center" id="table">
    <thead class="thead-dark">
      <tr>
        <th>Kode Kategori</th>
        <th>Nama Kategori</th>

        <th>PILIHAN</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $data = $objAdmin->showKategori();
      while ($a = $data->fetch_object()) {
      ?>
      <tr>
        <td><?=$a->id_kategori ?></td>
        <td><?=$a->nama_kategori ?></td>

        <td>
          <div class="btn-group">
            <a href="?view=edit-kategori&nik=<?=$a->id_kategori ?>" class="btn btn-sm btn-info">Edit</a>
            <a href="?view=hapus-kategori&nik=<?=$a->id_kategori ?>" onclick="return confirm('Hapus data ?')" class="btn btn-sm btn-danger">Hapus</a>
          </div>
        </td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
</div>
</div>
