<h2><center> DATA USER </center></h2>

<?php
	include "../koneksi.php";
	
	if (isset($_POST['update'])){
		$nik = $_POST['nik'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$no_kontak = $_POST['nomor_kontak'];
		$username = $_POST['username'];
		$password = $_POST['password'];


		$query = "UPDATE admin_detail SET nama = '$nama', alamat = '$alamat', no_kontak = '$no_kontak', username = '$username' where nik = '$nik'";
		$result = mysqli_query($con,$query);

		if ($result){
			$query = "UPDATE admin SET password = '$password' where username = '$username'";
			$hasil = mysqli_query($con,$query);

			if ($result){
				echo "Berhasil Di update";
			}
		} else {
			echo "gagal di update".mysqli_error();
		}
	}


?>
</table>
<a href="data_user.php">Kembali</a>