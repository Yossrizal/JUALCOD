<?php

	include "../koneksi.php";
	$nik = $_GET['nik'];
	$querya = "SELECT * from admin_detail where nik ='$nik'";
	$result = mysqli_query($con,$querya);

	while($hasil=mysqli_fetch_array($result)){
		$username=$hasil['username'];
	}

	
	$query = "DELETE from admin_detail where nik = '$nik'";
	$result = mysqli_query($con,$query);

	if($result){
		$query = "DELETE from admin where username = '$username'";
		$hasil = mysqli_query($con,$query);
		if($result){
		echo "Data berhasil dihapus";
	}

	} else {
		echo "Data gagal dihapus".mysqli_error();
	}


?>


<a href="data_user.php"> Kembali </a>