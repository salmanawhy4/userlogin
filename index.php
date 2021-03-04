<?php 
session_start();
include 'koneksi.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
 if(isset($_GET['pesan'])){
  if($_GET['pesan']=="gagal"){
   echo "<div class='alert'>Username dan Password Salah !</div>";
  }
 }
 ?>
	<div class="panel_login">
<form action="ceklogin.php" method="post">
	<ul>
		<li style="text-align: center;">
			<label for="username">Username :</label>
			<input type="text" name="username" class="form_login" placeholder="Masukkan Username">
		</li>
		<li style="text-align: center;">
			<label for="password">Password :</label>
			<input type="text" name="password" class="form_login" placeholder="Masukkan Password" >
		</li>
		<li style="text-align: center;">
			
			<input type="checkbox" name="remember" id="remember">
			<label for="remember">Remember me</label>
		</li>
		<li style="text-align: center; 
">
			<button style=" background-color:#158DA1" type="submit" class="tombol_login" name="login">Login</button>
		</li>
	</ul>

</form>
</div>

</body>
</html>