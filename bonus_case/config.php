<?php

$db = mysqli_connect( 'localhost', 'root', '', 'instansi' );

if (mysqli_connect_errno()){
	echo "Gagal melakukan koneksi ke MySQL: " . mysqli_connect_error();
}
?>