<?php 
	include ('../inc/config.php');
	$fungsi = new login();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login Administrator</title>
	<link rel="shortcut icon" href="../aktiva/img/logo-canting.png"> 
	<link rel="stylesheet" type="text/css" media="all" href="../aktiva/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" media="all" href="../aktiva/css/costume.login.css">
</head>
<body>
	<div>
		<div class="kotak-login">
			<div class="header">							
				<h2 class="text-center"><img class="logo-img" width="65" src="../aktiva/img/logo-canting.png" alt="logo"/> | <img class="logo-img" width="200" src="../aktiva/img/logo-cc.png" alt="logo"/></h2>
			</div>
			<form method="POST" action="" accept-charset="UTF-8">
			<div class="form-group fr">
								<label for="nama">Nama Pengguna</label>
								<input class="form-control" placeholder="Masukan nama pengguna" name="username" type="text">
			</div>
			<div class="form-group fr">
								<label for="password">Kata Sandi</label>
								<input class="form-control" placeholder="Masukan kata sandi" name="password" type="password" value="" id="password">
			</div>
			<input class="form-control btn btn-login" name="masuk" type="submit" value="Login">
			<div class="clearfix"> </div>
			<!--Pesan error login-->
			<div class="fr pesan-error">
			<p align="center" class="bg-warning">
				<?php
					if(isset($_POST['masuk'])){
						$login = $fungsi->cek_login($_POST['username'],$_POST['password']);
						if($login)
						{
							echo "<script>alert('Login Sukses')</script>";
							echo "<script>window.location='dashboard.php'</script>";
						}
					}
				?>
			</p>
			</div>

			</form>
			<hr/>

			<div class="copyright">
				<sup><small>Content Management System</small></sup>
				<p> Hak cipta&copy; 2016 CC, org. </p>
			</div>
		</div>


	</div>

    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    
    <script src="../aktiva/js/jquery.js"></script>
 
    
     <script src="../aktiva/js/bootstrap.min.js"></script>

</body>
</html>