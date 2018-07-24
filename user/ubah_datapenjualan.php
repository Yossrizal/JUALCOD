<h2><center> UBAH BARANG JUAL </center></h2>

<?php

	
	include "../koneksi.php";
	$no = $_GET['no_barang'];
	$query = "select * from barang where no_barang = '$no'";
	$result = mysqli_query($con,$query);
	
	while($hasil=mysqli_fetch_array($result)){
		
		
		$nama_barang = $hasil['nama_barang'];
		$harga_barang = $hasil['harga_barang'];
		$jenis_barang =$hasil['jenis_barang'];
		$tipe_barang = $hasil['tipe_barang'];
		$merk_barang = $hasil['merk'];
		$garansi = $hasil['garansi'];
		$status_barang=$hasil['status_barang'];
		

	}

?>


<center>
<form action="proses_ubahdatapenjualan.php" method="POST">
<table>
<tr>
<td> Nomor Barang</td>
<td> : <input type="text" name="no_barang" value=<?php echo $no;?> readonly="readonly"></td>
</tr>
<tr>
<td> Nama Barang</td>
<td> : <input type="text" name="nama_barang" value="<?php echo $nama_barang;?>"></td>
</tr>
<tr>
<td> Harga</td>
<td> : <input type="text" name="harga_barang" value="<?php echo $harga_barang;?>"></td>
</tr>
<tr>
<td> Jenis</td>
<td> : <input type="text" name="jenis_barang" value="<?php echo $jenis_barang;?>"></td>
</tr>
<tr>
<td> Tipe</td>
<td> : <select name="tipe_barang">
	<option value="komputer">Komputer dan Aksesoris</option>
	<option value="handphone">Handphone dan Aksesoris</option>
	<option value="elektronik">Elektronik Rumah</option>
	<option value="alat_dapur">Alat Dapur</option>
	<option value="alat_pertukangan">Alat Pertukangan</option>
	<option value="meubel">Meubel</option>
</select></td>
</tr>
<tr>
<td> Merk</td>
<td> : <input type="text" name="merk" value="<?php echo $merk_barang;?>"></td>
</tr>
<tr>
<td> Garansi</td>
<td> : <input type="text" name="garansi" value="<?php echo $garansi;?>" size="2"> Bulan</td>
</tr>
<td> Status barang</td>
<td> : <select name="status_barang">
		<option value="tersedia">Tersedia</option>
		<option value="dipesan">Dipesan</option>
		<option value="terjual">Terjual</option>
	</select></td>
</tr>
<tr>
<td><input type="submit" name="submit" value="Kirim"> <input type="reset" value="Reset"></td>
</tr>
</table>
</form>
</center>