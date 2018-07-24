<?php

	include "../koneksi.php";
	$no = $_GET['no_barang'];
	$query = "DELETE from barang where no_barang = '$no'";
	$hasil = mysql_query($query);

	if($hasil){
		echo "Data berhasil dihapus";
	} else {
		echo "Data gagal dihapus".mysql_error();
	}


?>


<a href="data_penjualan_user.php"> Kembali </a>