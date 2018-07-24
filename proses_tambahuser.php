<?php

	$con = mysqli_connect('localhost','root','','jualonline');
	if (isset($_POST['tambah'])){
		$nik = $_POST['nik'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$no_kontak = $_POST['nomor_kontak'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$tipe = 0;

		$query = "INSERT INTO admin_detail SET NIK = '$nik', nama = '$nama', alamat = '$alamat', no_kontak = '$no_kontak', username = '$username'";
		$hasil = mysqli_query($con, $query);

		if ($hasil){
			$query = "INSERT INTO admin SET username = '$username', password = '$password', tipe = '$tipe'";
			$hasil = mysqli_query($con, $query);

			if ($hasil){
				echo "Berhasil Ditambahkan <br />";
				echo 'Klik <a href="index.php"> Disini </a> Untuk Login';
			}
		} else {
			echo "gagal ditambahkan".mysql_error();
		}
	}

?>