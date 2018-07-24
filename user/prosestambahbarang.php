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
		session_start();
		$username = $_SESSION['login'];
		$status_barang = "tersedia";

		$query ="INSERT INTO barang SET no_barang='$no_barang', nama_barang='$nama_barang', harga_barang=$harga_barang, jenis_barang=$jenis_barang, tipe_barang='$tipe_barang', merk='$merk_barang', garansi='$garansi', status_barang = '$status_barang', username = '$username'";
		$result=mysqli_query($con,$query);

		if ($result){
			echo "berhasil ditambahkan <br />";
			echo '<a href="data_penjualan_user.php"> Kembali </a>';
		} else {
			echo "gagal : ".mysqli_error() ;
		}

		$dir_nama = "gambar/".$no_barang.".jpg";
		$nama_file = $_FILES['gambar']['name'];

		if(is_uploaded_file($_FILES['gambar']['tmp_name'])){

			$cek = move_uploaded_file($_FILES['gambar']['tmp_name'],"../".$dir_nama);
		}
		if ($cek) {
			echo ("Gambar berhasil diupload");
			} else {
			echo ("Gambar gagal diupload");
			}
		}
	

?>