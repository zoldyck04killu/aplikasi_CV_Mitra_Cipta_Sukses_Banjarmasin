<?php

// HOME

if (@$_GET['view'] == '' || @$_GET['view'] == 'home')
{
	include 'view/home/home.php';
}
elseif (@$_GET['view'] == 'barang')
{
	include 'view/barang.php';
}
elseif (@$_GET['view'] == 'input-barang')
{
	include 'view/input-barang.php';
}
elseif (@$_GET['view'] == 'bahan')
{
	include 'view/jenis-bahan.php';
}
elseif (@$_GET['view'] == 'input-bahan')
{
	include 'view/input-jenis-bahan.php';
}
elseif (@$_GET['view'] == 'kategori')
{
	include 'view/kategori.php';
}
elseif (@$_GET['view'] == 'input-kategori')
{
	include 'view/input-kategori.php';
}
//
