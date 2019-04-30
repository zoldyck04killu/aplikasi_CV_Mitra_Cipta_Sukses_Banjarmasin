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
elseif (@$_GET['view'] == 'bahan')
{
	include 'view/jenis-bahan.php';
}
//
