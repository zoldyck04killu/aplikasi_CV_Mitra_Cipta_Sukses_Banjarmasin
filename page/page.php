<?php

// HOME

if (@$_GET['view'] == '' || @$_GET['view'] == 'home')
{
	include 'view/home/home.php';
}
elseif(@$_GET['view'] == 'login')
{
	include 'view/login.php';
}
elseif($_GET['view'] == 'logout')
{
	$objAdmin->logout();
	echo '<script>
    window.location="?view=login";
     </script>';
}
elseif (@$_GET['view'] == 'barang')
{
	include 'view/barang.php';
}
elseif (@$_GET['view'] == 'input-barang')
{
	include 'view/input-barang.php';
}
elseif(@$_GET['view'] == 'edit-barang')
{
	include 'view/edit-barang.php';
}
elseif (@$_GET['view'] == 'hapus-barang')
{
	$kd_brg = @$_GET['id_brg'];
	$hapus = $objAdmin->hapusBarang($kd_brg);

	if ($hapus) {
		echo '
			<script> alert("Berhasil"); window.location="?view=barang" </script>
		';
	}else{
		echo '
			<script> alert("Gagal") </script>
		';
	}

}
elseif (@$_GET['view'] == 'bahan')
{
	include 'view/jenis-bahan.php';
}
elseif (@$_GET['view'] == 'input-bahan')
{
	include 'view/input-jenis-bahan.php';
}
elseif (@$_GET['view'] == 'edit-jenis-bahan')
{
	include 'view/edit-jenis-bahan.php';
}
elseif (@$_GET['view'] == 'hapus-jenis-bahan')
{
	$kd_bahan = @$_GET['id_bahan'];
	$hapus = $objAdmin->hapusJenisBahan($kd_bahan);

	if ($hapus) {
		echo '
			<script> alert("Berhasil"); window.location="?view=bahan" </script>
		';
	}else{
		echo '
			<script> alert("Gagal") </script>
		';
	}
}
elseif (@$_GET['view'] == 'kategori')
{
	include 'view/kategori.php';
}
elseif (@$_GET['view'] == 'input-kategori')
{
	include 'view/input-kategori.php';
}
elseif (@$_GET['view'] == 'edit-kategori')
{
	include 'view/edit-kategori.php';
}
elseif (@$_GET['view'] == 'hapus-kategori')
{
	$id_kategori = @$_GET['id_kategori'];
	$hapus = $objAdmin->hapusKategori($id_kategori);

	if ($hapus) {
		echo '
			<script> alert("Berhasil"); window.location="?view=kategori" </script>
		';
	}else{
		echo '
			<script> alert("Gagal") </script>
		';
	}
}
elseif (@$_GET['view'] == 'pesan')
{
	include 'view/pesan.php';
}
elseif (@$_GET['view'] == 'data-pemesanan')
{
	include 'view/data-pemesanan.php';
}
elseif (@$_GET['view'] == 'hapus-pemesanan')
{
	$id_pemesanan = @$_GET['id-pesan'];
	$hapus = $objAdmin->hapusPemesanan($id_pemesanan);

	if ($hapus) {
		echo '
			<script> alert("Berhasil"); window.location="?view=data-pemesanan" </script>
		';
	}else{
		echo '
			<script> alert("Gagal") </script>
		';
	}
}
elseif (@$_GET['view'] == 'info-produk')
{
	include 'view/info-produk.php';
}
elseif (@$_GET['view'] == 'about')
{
	include 'view/about-us.php';
}
elseif (@$_GET['view'] == 'sejarah')
{
	include 'view/sejarah.php';
}
elseif (@$_GET['view'] == 'visi-misi')
{
	include 'view/visi-misi.php';
}
elseif (@$_GET['view'] == 'contact')
{
	include 'view/contact.php';
}

//
