<?php

	include "../koneksi.php";
	$no = $_GET['no_barang'];
	$query = "DELETE from barang where no_barang = '$no'";
	$result = mysqli_query($con,$query);

	if($result){
		echo "Data berhasil dihapus";
	} else {
		echo "Data gagal dihapus".mysqli_error();
	}


?>


<a href="data_penjualan_admin.php"> Kembali </a>