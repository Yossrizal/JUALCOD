<?php

	include "../koneksi.php";
	if(isset($_POST['submit'])){
		$no_barang = $_POST['no_barang'];
		$nama_barang = $_POST['nama_barang'];
		$harga_barang = $_POST['harga_barang'];
		$jenis_barang = $_POST['jenis_barang'];
		$tipe_barang = $_POST['tipe_barang'];
		$merk_barang = $_POST['merk'];
		$garansi = $_POST['garansi'];
		$status_barang = $_POST['status_barang'];
		

		$query ="UPDATE barang SET nama_barang='$nama_barang', harga_barang=$harga_barang, jenis_barang=$jenis_barang, tipe_barang='$tipe_barang', merk='$merk_barang', status_barang='$status_barang' ,garansi='$garansi' WHERE no_barang='$no_barang'";
		$result=mysqli_query($con,$query);

		if ($result){
			echo "berhasil diupdate <br />";
			echo '<a href="data_penjualan_user.php"> Kembali </a>';
		} else {
			echo "gagal : ".mysqli_error() ;
		}
	}


?>