<h2><center> DATA PENJUALAN </center></h2>

<?php
	include "../koneksi.php";
	//$con = mysqli_connect('localhost','root','','jualonline');
	$query="SELECT no_barang, nama_barang, harga_barang, jenis_barang, tipe_barang, merk, status_barang, garansi, username from barang";
	$result = mysqli_query($con,$query);
	

?>

<table border= 1 align='center'>
<tr>
	<td align='center'> Nomor Barang
	<td align='center'> Nama
	<td align='center'> Harga
	<td align='center'> Jenis
	<td align='center'> Tipe
	<td align='center'> Merk
	<td align='center'> Garansi
	<td align='center'> Status
	<td align='center'> Penjual
	<td align='center'> Gambar

<?php
	
	while($hasil=mysqli_fetch_array($result)){
		$no=$hasil['no_barang'];
		$nama=$hasil['nama_barang'];
		$harga=$hasil['harga_barang'];
		$jenis=$hasil['jenis_barang'];
		$tipe=$hasil['tipe_barang'];
		$merk=$hasil['merk'];
		$garansi=$hasil['garansi'];
		$status_barang=$hasil['status_barang'];
		$penjual=$hasil['username'];
?>

<tr>
	<td align="center"><?php echo $no;?>
	<td align="center"><?php echo $nama;?>
	<td align="center"><?php echo $harga;?>
	<td align="center"><?php echo $jenis;?>
	<td align="center"><?php echo $tipe;?>
	<td align="center"><?php echo $merk;?>
	<td align="center"><?php echo $garansi;?>
	<td align="center"><?php echo $status_barang;?>
	<td align="center"><?php echo $penjual;?>
	<td align="center"><img src="../gambar/<?php echo $no;?>.jpg" height="100px" " />
	<td align="center"><a href="ubah_datapenjualan.php?no_barang=<?php echo $no?>">Ubah</a> | <a href="hapus_datapenjualan.php?no_barang=<?php echo $no?>">Hapus</a>
</td>
<?php
	}
?>
</table>

<a href="menu_admin.php"> Kembali </a>