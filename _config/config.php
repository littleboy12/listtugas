<?php

// settimg timezone
date_default_timezone_set('asia/Jakarta');
session_start();

// koneksi
$conn = mysqli_connect('localhost', 'root', '', 'db_listtugas');
if(mysqli_connect_errno()) {
	echo mysqli_connect_error();
}

// fungsi base_url
function base_url($url = null) {
	$base_url = "http://localhost/listtugas";
	if ($url != null) {
		return $base_url."/".$url;
	} else {
		return $base_url;
	}
}
?>