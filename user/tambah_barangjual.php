<h2><center> TAMBAH BARANG JUAL </center></h2>

<?php

	
	include "../koneksi.php";
	$query = "select * from barang";
	$result = mysqli_query($con,$query);
	$querymax = "select no_barang from barang order by no_barang desc limit 1";
	$resulta = mysqli_query($con, $querymax);
	if ($resulta){
		while($hasilmax = mysqli_fetch_assoc($resulta)){
			$no_barang = $hasilmax['no_barang'];	
		}
	}
	$count = mysqli_num_rows($result);

	if ($count>0){
		$bil=(int)($no_barang);
			$bil = $bil + 1;
			$no_barang = $bil;
	} else {
		$no_barang = 1;
	}




?>


<center>
<form action="prosestambahbarang.php" method="POST" ENCTYPE="multipart/form-data">
<table>
<tr><td>
	Upload File : <input type="file" name="gambar"><br>
	</td>
</tr>
<tr>
<td> Nomor Barang</td>
<td> : <input type="text" name="no_barang" value=<?php echo $no_barang;?> readonly="readonly"></td>
</tr>
<tr>
<td> Nama Barang</td>
<td> : <input type="text" name="nama_barang" value=""></td>
</tr>
<tr>
<td> Harga</td>
<td> : <input type="text" name="harga_barang" value=""></td>
</tr>
<tr>
<td> Jenis</td>
<td> : <input type="text" name="jenis_barang" value=""></td>
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
<td> : <input type="text" name="merk" value=""></td>
</tr>
<tr>
<td> Garansi</td>
<td> : <input type="text" name="garansi" value="" size="2"> Bulan</td>
</tr>
<tr>
<td><input type="submit" name="submit" value="Kirim"> <input type="reset" value="Reset"></td>
</tr>
</table>
</form>
</center>