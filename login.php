<?php 
	include 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" href="style.css">
	<link rel="icon" href="img/iclogin.svg">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/bg.svg">
		</div>
		<div class="login-content">
			<form method="POST" action="cek_login.php">
				<img src="img/user.svg">
				<h4>Login as Admin</h4>
				<h2 class="title">Please Sign In</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" class="input" name="username" required>
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" name="password" required>
            	   </div>
            	</div>
            	<a href="#">Forgot Password?</a>
            	<button type="submit" class="btn" value="Login">LOGIN</button>
				<br>
				<p class="footer__copy">Sistem Informasi PT Sawit Bahagia</p>
            </form>
        </div>
    </div>
		<!-- Eksekusi Form Login -->
	<?php if(isset($_GET['pesan'])) {  ?>
	<label style="color:red;"><?php echo $_GET['pesan']; ?></label>
	<?php } ?>	
  <!-- Akhir Eksekusi Form Login -->

    <script src="main.js"></script>
</body>
</html>
