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

  public function login($id_admin, $password)
  {
    $db = $this->mysqli->conn;
    $userdata = $db->query("SELECT * FROM login WHERE id_admin = '$id_admin' ");
    $cekUser  = $userdata->num_rows;
    $cekPass  = $userdata->fetch_object();

      if ($cekUser == 1) {
          if (password_verify($password, $cekPass->password)) {
              
              $_SESSION['admin'] = $cekPass->id_admin;

              return true;
          }else{

              return false;
          }
      }else{

          return false;
      }

  }


  public function logout()
  {
    unset($_SESSION);
    session_destroy();
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

  public function editBahan($id_bahan)
  {
    $db = $this->mysqli->conn;
    $sql = " SELECT * FROM jenis_bahan WHERE kode_jenis_bahan = '$id_bahan' ";
    $query = $db->query($sql);
    return $query;
  }

  public function udapteJenisBahan($kd_bahan, $harga, $jenis, $ukuran, $keterangan)
  {
    $db = $this->mysqli->conn;
    $sql = " UPDATE jenis_bahan SET harga_bahan = '$harga', jenis_bahan = '$jenis', ketarangan = '$keterangan', ukuran_bahan = '$ukuran' WHERE kode_jenis_bahan = '$kd_bahan' ";
    $query = $db->query($sql);

     if ($query) {
          return true;
      }else{
          return false;
      }
  }

  public function hapusJenisBahan($kd_bahan)
  {
    $db = $this->mysqli->conn;
    $sql = " DELETE FROM jenis_bahan WHERE kode_jenis_bahan = '$kd_bahan' ";
    $query = $db->query($sql);

     if ($query) {
          return true;
      }else{
          return false;
      }
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

  public function edit_brg($id)
  {
    $db = $this->mysqli->conn;
    $sql = " SELECT * FROM nama_barang
          INNER JOIN jenis_bahan ON nama_barang.type_barang = jenis_bahan.kode_jenis_bahan
          INNER JOIN kategori ON nama_barang.kategori = kategori.id_kategori 
          WHERE nama_barang.kode_barang = '$id' ";
    $query = $db->query($sql);
    return $query;
  }

  public function updateBarang($kd_brg, $barang, $jenis_bahan,$kategori)
  {
    $db = $this->mysqli->conn;
    $sql = " UPDATE nama_barang SET nama_barang = '$barang', type_barang = '$jenis_bahan', kategori = '$kategori' WHERE kode_barang = '$kd_brg' ";
    $query = $db->query($sql);

      if ($query) {
          return true;
      }else{
          return false;
      }
  }

  public function hapusBarang($kd_brg)
  {
    $db = $this->mysqli->conn;
    $sql = " DELETE FROM nama_barang WHERE kode_barang = '$kd_brg' ";
    $query = $db->query($sql);

      if ($query) {
          return true;
      }else{
          return false;
      }
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

  public function editKategori($id_kategori)
  {
    $db = $this->mysqli->conn;
    $sql = " SELECT * FROM kategori WHERE id_kategori = '$id_kategori' ";
    $query = $db->query($sql);
    return $query;
  }

  public function updateKategori($id_kategori, $nama_kategori)
  {
    $db = $this->mysqli->conn;
    $sql = " UPDATE kategori SET nama_kategori = '$nama_kategori' WHERE id_kategori = '$id_kategori' ";
    $query = $db->query($sql);

      if ($query) {
          return true;
      }else{
          return false;
      }
  }

  public function hapusKategori($id_kategori)
  {
    $db = $this->mysqli->conn;
    $sql = " DELETE FROM kategori WHERE id_kategori = '$id_kategori' ";
    $query = $db->query($sql);

      if ($query) {
          return true;
      }else{
          return false;
      }
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

  public function hapusPemesanan($id_pemesanan)
  {
    $db = $this->mysqli->conn;
    $sql = " DELETE FROM pemesanan WHERE kode_pemesanan = '$id_pemesanan' ";
    $query = $db->query($sql);

      if ($query) {
          return true;
      }else{
          return false;
      }
  }

}// end class

?>
