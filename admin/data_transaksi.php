<h2><center> DATA TRANSAKSI </center></h2>

<?php
	include "../koneksi.php";
	//$con = mysqli_connect('localhost','root','','jualonline');
	$query="select * from transaksi";
	$result = mysqli_query($con,$query);
	

?>

<table border= 1 align='center'>
<tr>
	<td align='center'> Nomor Transaksi
	<td align='center'> Tanggal
	<td align='center'> Status
	<td align='center'> Pembeli
	<td align='center'> Nomor Barang
	

<?php
	
	while($hasil=mysqli_fetch_array($result)){
		$no=$hasil['no_transaksi'];
		$tgl=$hasil['tgl_transaksi'];
		$status=$hasil['status_transaksi'];
		$pembeli=$hasil['username'];
		$no_barang=$hasil['no_barang'];
		
?>

<tr>
	<td align="center"><?php echo $no;?>
	<td align="center"><?php echo $tgl;?>
	<td align="center"><?php echo $status;?>
	<td align="center"><?php echo $pembeli;?>
	<td align="center"><?php echo $no_barang;?>
	
	<td align="center"><a href="ubah_transaksi.php?no_transaksi=<?php echo $no?>">Ubah</a> | <a href="hapus_transaksi.php?no_transaksi=<?php echo $no?>">Hapus</a>
</td>
<?php
	}
?>
</table>

<a href="menu_admin.php"> Kembali </a>