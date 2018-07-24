<?php

	include "../koneksi.php";
	$no_transaksi = $_GET['no_transaksi'];

	$querya = "SELECT * from transaksi where no_transaksi ='$no_transaksi'";
	$result = mysqli_query($con,$querya);

	while($hasil=mysqli_fetch_array($result)){
		$no_barang=$hasil['no_barang'];
	}

	
	$query = "DELETE from transaksi where no_transaksi = '$no_transaksi'";
	$hasil = mysqli_query($con,$query);

	if($result){
		$query = "UPDATE barang SET status_barang = 'tersedia' where no_barang = '$no_barang'";
		$hasil = mysqli_query($con,$query);
		if($result){
		echo "Data berhasil dihapus";
	}

	} else {
		echo "Data gagal dihapus".mysqli_error();
	}


?>


<a href="data_transaksi.php"> Kembali </a>