<?php
// require_once 'config/autoload.php';

require_once 'config/config.php';
require_once 'config/connection.php';
include('models/admin.php');
$obj = new Connection($host, $user, $pass, $db);
$objAdmin = new Admin($obj);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/DataTables/datatables.min.css"/>

    <!-- Bootstrap core JavaScript -->
    <script src="<?=base_url()?>assets/jquery-3.1.1.min.js"></script>
    <!-- <script src="<?=base_url()?>assets/bootstrap/js/bootstrap.bundle.min.js"></script> -->

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/DataTables/datatables.min.js"></script>

    <title>CV. Mitra Cipta Sukses Banjarmasin</title>
  </head>
  <body>

    <div class="ml-4" id="" style="">
      <br>
      <h3 class="text-muted">CV. Mitra Cipta Sukses Banjarmasin <img src="assets/image/mcs.jpeg" alt="" width="90" height="50" style="margin-right:15px; "></h3>
      <hr>
      <p>JL R.K.ILIR Np. 563 Banjarmasin</p>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
      <!-- <a class="navbar-brand" href="#">Navbar</a> -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav"> &nbsp;
          <a class="nav-item nav-link btn btn-info btn-md" href="?view=home">Home <span class="sr-only">(current)</span></a>&nbsp;
          <a class="nav-item nav-link btn btn-info btn-md" href="?view=info-produk">Info Produk</a> &nbsp;
          <a class="nav-item nav-link btn btn-info btn-md" href="?view=about">About US</a> &nbsp;
          <?php if (isset($_SESSION['admin'])): ?>
            <a class="nav-item nav-link btn btn-info btn-md" href="?view=barang">Barang</a> &nbsp;
            <a class="nav-item nav-link btn btn-info btn-md" href="?view=bahan">Jenis Bahan</a> &nbsp;
            <a class="nav-item nav-link btn btn-info btn-md" href="?view=kategori">Kategori</a> &nbsp;
            <a class="nav-item nav-link btn btn-info btn-md" href="?view=data-pemesanan">Data Pemesanan</a> &nbsp;

            <a class="nav-item nav-link btn btn-info btn-md" href="?view=pesan">Pemesanan Barang</a> &nbsp;

            <a class="nav-item nav-link btn btn-danger btn-md" style="position: relative; left: 20%;" href="?view=cara-pemesanan">Cara Pemesanan</a> &nbsp;

          <?php else: ?>
          <a class="nav-item nav-link btn btn-info btn-md" href="?view=pesan">Pemesanan Barang</a> &nbsp;

          <a class="nav-item nav-link btn btn-danger btn-md" style="position: relative; left: 120%;" href="?view=cara-pemesanan">Cara Pemesanan</a> &nbsp;
        <?php endif; ?>

        </div>
      </div>
    </nav>

    <div class="container mt-3" id="" style="">

          <?php include('page/page.php'); ?>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
    <script type="text/javascript">
        $(document).ready( function () {
          $('#table').DataTable();
        } );
    </script>

  </body>
</html>
<style media="screen">
.navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link {
  color: #ffffff;
  border-radius: 20px;
}
.navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover {
  color: #ffffff;
}
</style>
