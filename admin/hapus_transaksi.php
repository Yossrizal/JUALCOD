<?php

	include "../koneksi.php";
	$no_transaksi = $_GET['no_transaksi'];

	$querya = "SELECT * from transaksi where no_transaksi ='$no_transaksi'";
	$sql = mysql_query($querya) or die (mysqli_error());

	while($hasil=mysql_fetch_array($sql)){
		$no_barang=$hasil['no_barang'];
	}

	
	$query = "DELETE from transaksi where no_transaksi = '$no_transaksi'";
	$hasil = mysql_query($query);

	if($hasil){
		$query = "UPDATE barang SET status_barang = 'tersedia' where no_barang = '$no_barang'";
		$hasil = mysql_query($query);
		if($hasil){
		echo "Data berhasil dihapus";
	}

	} else {
		echo "Data gagal dihapus".mysql_error();
	}


?>


<a href="data_transaksi.php"> Kembali </a>