<?php

  require_once '../config/config.php';
  require_once '../config/connection.php';
  include('../models/admin.php');
  $obj = new Connection($host, $user, $pass, $db);
  $objAdmin = new Admin($obj);

  if (@$_REQUEST['type'] == 'get_harga') {

      $kode_brg = @$_POST['kode_brg'];
      $harga = $objAdmin->get_harga($kode_brg)->fetch_object();

      echo json_encode($harga);
  }

?>
