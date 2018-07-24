<?php
	include "../koneksi.php";
	$nik = $_GET['nik'];
	$query="select * from admin_detail where nik = '$nik'";
	$result = mysqli_query($con,$query);

	while($hasil=mysqli_fetch_array($result)){
		
		$nama=$hasil['nama'];
		$alamat=$hasil['alamat'];
		$no_kontak=$hasil['no_kontak'];
		$username=$hasil['username'];
		

	}

?>

<h2><center> UBAH USER </center></h2>
<center>
<form action="proses_userubah.php" method="POST">
<table>
<tr>
<td> NIK</td>
<td> : <input type="text" name="nik" value="<?php echo $nik ?>";" readonly="readonly"></td>
</tr>
<tr>
<td> Nama</td>
<td> : <input type="text" name="nama" value="<?php echo $nama ?>"></td>
</tr>
<tr>
<td> Nomor Kontak</td>
<td> : <input type="text" name="nomor_kontak" value="<?php echo $no_kontak ?>"></td>
</tr>
<tr>
<td> Alamat</td>
<td> : <input type="text" name="alamat" value="<?php echo $alamat ?>"></td>
</tr>
<tr>
<td> Username</td>
<td> : <input type="text" name="username" value="<?php echo $username ?>" readonly="readonly"></td>
</tr>
<td> Password</td>
<td> : <input type="password" name="password" value=""></td>
<tr>
<td><input type="submit" name="update" value="Kirim"> <input type="reset" value="Reset"></td>
</tr>
</table>
</form>
</center>