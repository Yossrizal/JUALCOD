<?php
	include "koneksi.php";
	//$con = mysqli_connect('localhost','root','','jualonline');
	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		

		$username = stripcslashes($username);
		$password = stripcslashes($password);
		
		$username = mysqli_real_escape_string($con,$username);
		$password = mysqli_real_escape_string($con,$password);
		
				//query db
		$sql = "select * from admin where username = '$username' and password = '$password'";
		$result = mysqli_query($con,$sql);
	

   		if ($result) {

    		 while ($row = mysqli_fetch_array($result)){
			$username = $row['username'];
			session_start();
			$_SESSION['login'] = $username;

        	 if ($row['tipe'] == 0){
				echo "Login Berhasil. Sedang Mengalihkan ...";
				echo "<script>setTimeout(function () {
	 			  window.location.href= 'user/menu_user.php';
	
				},3000);</script>";	
			} else if ($row['tipe'] == 1){
				echo "Login Berhasil. Sedang Mengalihkan ...";
				echo "<script>setTimeout(function () {
	 			  window.location.href= 'admin/menu_admin.php';
	
				},3000);</script>";	
			} else {
				

			

		}
			
			
			
 	    
         	
         }
		} else {
         	echo "Password atau Username salah";
		}
		}

	/**	if ($row['username'] == $username && $row['password'] == $password){

			if ($row['tipe'] == 0){
				echo "Login Berhasil. Sedang Mengalihkan ...";
				echo "<script>setTimeout(function () {
	 			  window.location.href= '/uaspwl/user/menu_user.php';
	
				},3000);</script>";	
			} else if ($row['tipe'] == 1){
				echo "Login Berhasil. Sedang Mengalihkan ...";
				echo "<script>setTimeout(function () {
	 			  window.location.href= '/uaspwl/admin/menu_admin.php';
	
				},3000);</script>";	
			}

			
			session_start();
			$_SESSION['login'] = $username;

		} else {
			echo "Login Gagal";
		} **/
	
?>