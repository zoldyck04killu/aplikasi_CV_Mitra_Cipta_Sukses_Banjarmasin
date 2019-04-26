<?php 
session_start();



// database settings

$host = "localhost";
$user = "root";
$pass = "123";
$db   = "";

// end database settings



function base_url($url = null)
{
	$base_url = "http://localhost/aplikasi_pemilihan_BEM/";
	if ($url != null ) {
		return $base_url."/".$url;
	} else  {
			return $base_url;
	}
}