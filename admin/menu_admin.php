<?php

	include "../koneksi.php";
	session_start();
	if (isset($_SESSION['login'])){

		
	$username = $_SESSION['login'];

	$query = "select * from admin_detail where username='$username'";
	$result = mysqli_query($con,$query);
	

	if ($hasil = mysqli_fetch_array($result)){
		$nama = $hasil['nama'];
		$alamat = $hasil['alamat']; 
		$no_kontak = $hasil['no_kontak'];
		$NIK = $hasil['NIK'];
	}
echo '



<!DOCTYPE html>
<html>
<head>
	<title> Ruang Panel ADMIN </title>
</head>
  <link href="css/style.css" rel="stylesheet" />
<h2> ADMINISTRATOR PANEL </h2>
<body background="gambar/bg.jpg">
	<table border="1px">	
			<tr>
				<td>Username 	<td>: '. $username .'</td></td>
			</tr>
			<tr>
				<td>Nama 	<td>: '. $nama.'</td></td>
			</tr>
			<tr>
				<td>Alamat 	<td>:'.  $alamat .'</td></td>
			</tr>
			<tr>
				<td>Nomor Kontak 	<td>: '.  $no_kontak .'</td></td>
			</tr>
			<tr>
				<td>NIK 	<td>:'.  $NIK .'</td></td>
			</tr>
			<tr>
				<td>Tipe Akun 	<td>: ADMINISTRATOR</td></td>
			</tr>
	</table>
	<a href="data_transaksi.php"> Data Transaksi </a><br />
	<a href="data_user.php"> Data User </a><br />
	<a href="data_penjualan_admin.php"> Data Penjualan </a><br />
	<a href="tentang.php"> Tentang </a><br />
	<a href="../logout.php"> Log Out </a>
	

</body>
</html>

'; } else {
	echo 'Anda Belum Login. Klik <a href="../index.php"> Disini </a> Untuk Login';
}
	?>
	
	



