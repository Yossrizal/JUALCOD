<h2><center> DATA USER </center></h2>

<?php
	include "../koneksi.php";
	//$con = mysqli_connect('localhost','root','','jualonline');
	$query="select admin_detail.NIK, admin_detail.nama, admin_detail.no_kontak, admin_detail.alamat, admin_detail.username, admin.tipe from admin_detail INNER JOIN admin ON admin_detail.username=admin.username";
	$result = mysqli_query($con,$query);

?>

<table border= 1 align='center'>
<tr>
	<td align='center'> NIK
	<td align='center'> Nama
	<td align='center'> Alamat
	<td align='center'> Nomor Kontak
	<td align='center'> Username
	<td align='center'> Tipe Akun
	<td align='center'> Action

<?php
	
	while($hasil=mysqli_fetch_array($result)){
		$nik=$hasil['NIK'];
		$nama=$hasil['nama'];
		$alamat=$hasil['alamat'];
		$no_kontak=$hasil['no_kontak'];
		$username=$hasil['username'];
		$tipe=$hasil['tipe'];
		if($tipe==0){
			$tipe = "Penjual/Pembeli";
		} else if ($tipe==1){
			$tipe = "Administrator";
		}
?>

<tr>
	<td align="center"><?php echo $nik;?>
	<td align="center"><?php echo $nama;?>
	<td align="center"><?php echo $alamat;?>
	<td align="center"><?php echo $no_kontak;?>
	<td align="center"><?php echo $username;?>
	<td align='center'><?php echo $tipe;?>
	<td align="center"><a href="ubah_user.php?nik=<?php echo $nik?>">Ubah</a> | <a href="hapus_user.php?nik=<?php echo $nik?>">Hapus</a>
</td>
<?php
	}
?>
</table>
<a href="tambah_user.php">Tambah User</a>  | <a href="menu_admin.php">Kembali</a>