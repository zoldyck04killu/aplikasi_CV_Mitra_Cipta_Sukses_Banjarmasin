<?php

/**
 *
 */
class Admin
{

  private $mysqli;

  function __construct($mysqli)
  {
    $this->mysqli = $mysqli;
  }

  // daftar (register) masyarakat/users

  function insertJenisBahan( $harga, $jenis, $ukuran, $keterangan)
  {
    $db = $this->mysqli->conn;
    $db->query("INSERT INTO jenis_bahan ( harga_bahan, jenis_bahan,ketarangan,ukuran_bahan) VALUES ('$harga', '$jenis', '$keterangan','$ukuran')") or die ($db->error);
    return true;
  }

  public function showJenisBahan()
  {
    $db = $this->mysqli->conn;
    $sql = " SELECT * FROM jenis_bahan ";
    $query = $db->query($sql);
    return $query;
  }

  function insertBarang($barang, $jenis_bahan)
{
    $db = $this->mysqli->conn;
    $db->query("INSERT INTO nama_barang (nama_barang,type_barang) VALUES ('$barang', '$jenis_bahan')") or die ($db->error);
    return true;
  }

  public function showBarang()
  {
    $db = $this->mysqli->conn;
    $sql = " SELECT * FROM nama_barang INNER JOIN jenis_bahan ON nama_barang.type_barang = jenis_bahan.kode_jenis_bahan ";
    $query = $db->query($sql);
    return $query;
  }


}// end class

?>
