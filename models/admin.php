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

  function insertBarang($barang, $jenis_bahan,$kategori)
{
    $db = $this->mysqli->conn;
    $db->query("INSERT INTO nama_barang (nama_barang,type_barang,kategori) VALUES ('$barang', '$jenis_bahan','$kategori')") or die ($db->error);
    return true;
  }

  public function showBarang()
  {
    $db = $this->mysqli->conn;
    $sql = " SELECT * FROM nama_barang
          INNER JOIN jenis_bahan ON nama_barang.type_barang = jenis_bahan.kode_jenis_bahan
          INNER JOIN kategori ON nama_barang.kategori = kategori.id_kategori ";
    $query = $db->query($sql);
    return $query;
  }

  function insertKategori($nama_kategori)
{
    $db = $this->mysqli->conn;
    $db->query("INSERT INTO kategori (nama_kategori) VALUES ('$nama_kategori')") or die ($db->error);
    return true;
  }

  public function showKategori()
  {
    $db = $this->mysqli->conn;
    $sql = " SELECT * FROM kategori ";
    $query = $db->query($sql);
    return $query;
  }

  function pemesanan($nama, $alamat,$jenis_bahan,$ukuran,$no_hp)
  {
    $db = $this->mysqli->conn;
    $db->query("INSERT INTO pemesanan (nama_pemesan,alamat,barang,ukuran,no_hp) VALUES ('$nama', '$alamat','$jenis_bahan','$ukuran','$no_hp')") or die ($db->error);

    $sql = " SELECT jenis_bahan.ukuran_bahan, jenis_bahan.kode_jenis_bahan FROM nama_barang
          INNER JOIN jenis_bahan ON nama_barang.type_barang = jenis_bahan.kode_jenis_bahan WHERE nama_barang.kode_barang = '$jenis_bahan' ";
    $query = $db->query($sql);
    $a = $query->fetch_object();
    $ukuran_baru = $a->ukuran_bahan - $ukuran;

    $sql = " UPDATE jenis_bahan SET ukuran_bahan = '$ukuran_baru' WHERE kode_jenis_bahan = '$a->kode_jenis_bahan' ";
    $query = $db->query($sql);
    return true;
  }

  public function showPemesanan()
  {
    $db = $this->mysqli->conn;
    $sql = " SELECT * FROM pemesanan
          INNER JOIN nama_barang ON nama_barang.kode_barang = pemesanan.barang";
    $query = $db->query($sql);
    return $query;
  }

}// end class

?>
