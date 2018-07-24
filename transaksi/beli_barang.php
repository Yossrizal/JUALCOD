<?php 
	include "../koneksi.php";
	session_start();
	$pembeli = $_SESSION['login'];

	$no_barang = $_GET['no_barang'];
	$query = "SELECT * from barang where no_barang = '$no_barang'";
	$result = mysqli_query($con,$query);
	
	//if ($result){
		while($hasil=mysqli_fetch_array($result)){
			$nama_barang = $hasil['nama_barang'];
			$harga_barang = $hasil['harga_barang'];
			$jenis_barang =$hasil['jenis_barang'];
			$tipe_barang = $hasil['tipe_barang'];
			$merk_barang = $hasil['merk'];
			$garansi = $hasil['garansi'];
			$status_barang=$hasil['status_barang'];
			$penjual = $hasil['username'];
			}
	//}

	$querymax = "select no_transaksi from transaksi order by no_transaksi desc limit 1";
	$resulta = mysqli_query($con,$querymax);

	//if ($resulta){
		while($hasilmax = mysqli_fetch_assoc($resulta)){
			$no_transaksi = $hasilmax['no_transaksi'];	
		}
		//}

	$count = mysqli_num_rows($resulta);

	if ($count>0){
		$bil=(int)($no_transaksi);
			$bil = $bil + 1;
			$no_transaksi = $bil;
	} else {
		$no_transaksi = 1;
	}

	$querytransaksi = "INSERT INTO transaksi SET no_transaksi = '$no_transaksi', status_transaksi = 'dipesan', username = '$pembeli', no_barang = '$no_barang'";
	$hasiltransaksi = mysqli_query($con,$querytransaksi);

	if ($hasiltransaksi){
			$querytransaksi2 = "UPDATE barang SET status_barang = 'dipesan' where no_barang = '$no_barang'";
			$hasil2 = mysqli_query($con,$querytransaksi2);

			if ($hasil2){
				echo "Berhasil memesan barang";
			}
	} else {
		echo "gagal : ".mysqli_error();
	}



?>
<script>
function cetak() {
    window.print();
}
</script>


<!DOCTYPE html>
<html>
<head>
	<title> Bukti Transaksi </title>
</head>
<body>
	<h2> Bukti Transaksi </h2>
	<table border="1px">	
			<tr>
				<td>Pembeli 	<td>: <?php echo $pembeli; ?></td></td>
			</tr>
			<tr>
				<td>Penjual 	<td>: <?php echo $penjual; ?></td></td>
			</tr>
			<tr>
				<td>Nomor Transaksi 	<td>: <?php echo $no_transaksi; ?></td></td>
			</tr>
			<tr>
				<td>Nomor Barang 	<td>: <?php echo $no_barang; ?></td></td>
			</tr>
			<tr>
				<td>Jenis 	<td>: <?php echo $jenis_barang; ?></td></td>
			</tr>
			<tr>
				<td>Merk 	<td>: <?php echo $merk_barang; ?></td></td>
			</tr>
			<tr>
				<td>Garansi 	<td>: <?php echo $garansi; ?></td></td>
			</tr>
			<tr>
				<td>
					<button onclick="cetak()">Cetak Bukti Transaksi Ini</button>
				</td>
			</tr>
	</table>

	<a href ="data_jual.php"> Kembali </a>

</body>
</html>