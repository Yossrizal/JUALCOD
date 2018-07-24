<?php
	include "../koneksi.php";
	$no = $_GET['no_transaksi'];

	$query = "SELECT * from transaksi WHERE no_transaksi = '$no'";
	$result = mysqli_query($con,$query);

	while ($hasil = mysqli_fetch_array($result)) {
		$tgl=$hasil['tgl_transaksi'];
		$no_barang=$hasil['no_barang'];
	}


?>

<!DOCTYPE html>
<html>
<head>
	<title> Ubah Transaksi</title>
</head>
<body>

	<h2> Ubah Status Transaksi </h2>

	<form action="proses_ubahtransaksi.php?no=<?php echo $no;?>&no_barang=<?php echo $no_barang;?>" method="POST">
		<table border="1px">	
			<tr>
				<td>Nomor Transaksi 	<td>: <?php echo $no;?></td></td>
			</tr>
			<tr>
				<td>Tanggal Transaksi 	<td>: <?php echo $tgl;?></td></td>
			</tr>
			<tr>
				<td>Nomor Barang 	<td>: <?php echo $no_barang;?></td></td>
			</tr>
			<tr>
				<td>Status 	<td>: <select name="status">
					<option value="dipesan">Dipesan</option>
					<option value="tersedia">Tersedia</option>
					<option value="terjual">Terjual</option>
				</select></td></td>
			</tr>
			<tr>
				<td><input type="submit" name="update" value="Perbarui"></td>
			</tr>
	</table>
	</form>

</body>
</html>
