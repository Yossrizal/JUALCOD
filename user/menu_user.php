<?php

	include "../koneksi.php";
	session_start();
	if (isset($_SESSION['login'])){

		
	$username = $_SESSION['login'];

	$query = "select * from admin_detail where username='$username'";
	$result = mysqli_query($con,$query);
	
	if ($result){
	 	while ($hasil = mysqli_fetch_array($result)){
		$nama = $hasil['nama'];
		$alamat = $hasil['alamat']; 
		$no_kontak = $hasil['no_kontak'];
		$NIK = $hasil['NIK'];
		}
	}
echo '



<!DOCTYPE html>
<html>
<head>
	<title> Ruang Panel </title>
</head>
<h2> USER PANEL </h2>
<body>
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
				<td>Tipe Akun 	<td>: penjual / pembeli</td></td>
			</tr>
	</table>
	<a href="../transaksi/data_jual.php"> Beli Barang </a><br />
	<a href="data_transaksi.php"> Data Transaksi </a><br />
	<a href="data_penjualan_user.php"> Data Penjualan </a><br />
	<a href="tambah_barangjual.php"> Tambah Barang Jual </a><br />
	<a href="tentang.php"> Tentang </a><br />
	<a href="../logout.php"> Log Out </a>

</body>
</html>

'; } else {
	echo 'Anda Belum Login. Klik <a href="../index.php"> Disini </a> Untuk Login';
}
	?>