<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
      
	   <link href="css/style1.css" rel="stylesheet" />
</head>


<body background="gambar/bg.jpg" id="contentWrapper" >

  <html lang="en-US">
<head>
  <meta charset="utf-8">
    <title>Login</title>
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700">

</head>
<br><br><br><br><br>
    <div  id="login">
     <form action="login.php" name='form-login' method='post'>
        <span class="fontawesome-user"></span>
          <input type="text" id="user" placeholder="Username" name="username">
       
        <span class="fontawesome-lock"></span>
          <input type="password" id="pass" placeholder="Password" name="password">
        
        <input type="submit" name="login" value="Login" >
		<p align='center', size='5px'>*note:login sebagai admin = fitur administrator username:admin pass:nimda</p>
		<p align='center', size='5px'>**note:login sebagai user = fitur penjual/pembeli username:halogen pass:123</p>
		<p align='center'> Belum Punya Akun? <a href="tambah_user.php">Daftar Disini</a></p>
    <p align='center'> <a href="profile.php">Tentang Kami</a></p>
	 </form>
	 
</body>

