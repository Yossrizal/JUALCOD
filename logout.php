<?php
	session_start();
	if (isset($_SESSION['login'])){
		unset ($_SESSION);
		session_destroy();
	}

	echo "Anda berhasil logout";


?> <br />
Klik <a href="index.php"> Disini </a>untuk login.