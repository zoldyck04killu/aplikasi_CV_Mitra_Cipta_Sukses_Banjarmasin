<?php
session_start();



// database settings

$host = "localhost";
$user = "root";
$pass = "123";
$db   = "aplikasi_cv_mitra_cipta_sukses_banjarmasin";

// end database settings



function base_url($url = null)
{
	$base_url = "http://localhost/aplikasi_CV_Mitra_Cipta_Sukses_Banjarmasin/";
	if ($url != null ) {
		return $base_url."/".$url;
	} else  {
			return $base_url;
	}
}
