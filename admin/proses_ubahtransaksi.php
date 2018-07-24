<?php

	include "../koneksi.php";
	if (isset($_POST['update'])){
		
		$status = $_POST['status'];
		$no = $_GET['no'];
		$no_barang = $_GET['no_barang'];
		$query = "UPDATE transaksi SET status_transaksi ='$status' WHERE no_transaksi = '$no'";
		$result = mysqli_query($con,$query);

		if($result){
			$querybarang = "UPDATE barang SET status_barang ='$status' WHERE no_barang = '$no_barang'";
			$hasil = mysqli_query($con,$querybarang);
			if ($hasil){
				echo "Data berhasil diperbarui";
			}
		} else {
			echo "Gagal : ".mysql_error();
		}
	}

?>

<a href="menu_admin.php"> Kembali </a>	