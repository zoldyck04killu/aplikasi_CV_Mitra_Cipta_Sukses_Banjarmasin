<div class="card">
  <div class="card-header">
    <?php 
    $id = @$_GET['barang'];
    $data = $objAdmin->get_detail_barang($id)->fetch_object();
    echo $data->nama_barang;
     ?>
  </div>
  <div class="card-body">
    <img src="<?=base_url()?>assets/image/<?=$data->gambar_barang ?>" width="150px" alt="" class="img-thumbnail">
    Keterangan : <?=$data->keterangan ?>
  </div>
</div>
