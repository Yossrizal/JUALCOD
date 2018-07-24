<h2><center> DATA TRANSAKSI </center></h2>

<?php
	include "../koneksi.php";
	session_start();
	$login = $_SESSION['login'];
	//$con = mysqli_connect('localhost','root','','jualonline');
	$query="SELECT transaksi.no_transaksi, transaksi.tgl_transaksi, transaksi.status_transaksi, transaksi.username AS pembeli, transaksi.no_barang, barang.username AS penjual from transaksi INNER JOIN barang ON transaksi.no_barang=barang.no_barang WHERE barang.username = '$login' || transaksi.username = '$login'";
	$result = mysqli_query($con,$query);
	

?>

<table border= 1 align='center'>
<tr>
	<td align='center'> Nomor Transaksi
	<td align='center'> Tanggal
	<td align='center'> Status
	<td align='center'> Pembeli
	<td align='center'> Penjual
	<td align='center'> Nomor Barang
	

<?php
	//if ($result){
	while($hasil=mysqli_fetch_array($result)){
		$no=$hasil['no_transaksi'];
		$tgl=$hasil['tgl_transaksi'];
		$status=$hasil['status_transaksi'];
		$pembeli=$hasil['pembeli'];
		$penjual=$hasil['penjual'];
		$no_barang=$hasil['no_barang'];
	//}
?>

<tr>
	<td align="center"><?php echo $no;?>
	<td align="center"><?php echo $tgl;?>
	<td align="center"><?php echo $status;?>
	<td align="center"><?php echo $pembeli;?>
	<td align="center"><?php echo $penjual;?>
	<td align="center"><?php echo $no_barang;?>
	
	<td align="center"><a href="ubah_transaksi.php?no_transaksi=<?php echo $no?>">Ubah</a> | <a href="hapus_transaksi.php?no_transaksi=<?php echo $no?>">Hapus</a>
</td>
<?php
	}
?>
</table>

<a href="menu_user.php"> Kembali </a>