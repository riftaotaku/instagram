<?php
	$fullname=$_POST["fullname"];
	$email=$_POST["email"];
	$user=$_POST["user"];
	$pw=$_POST["pw"];
	if (empty($fullname) )
		{ ?>
		<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Instagram</title>
	<link rel="stylesheet" href="style2.css">
</head>
<body bgcolor="#F1F1F1">
<div id ="container"> 

	<div class="Header">
		Instagram
	</div>

	<div class="subheader">
		Sign up to see photos and videos <br>
		from your firends.
	</div>
	

	<div class="button">
	<a>
		<img src="fb.png" width="17" weight="17">
		<input type="submit" value="Login with Facebook"></a>
	</div>
	<div id="line">
	<center>
	<table>
	<tr>
	<td><div class="up">------------------------------ O</div></td>
	<a><td><div class="up">R ----------------------------</div></td></a>
	</tr>
	</table>
	</center>
	</div>
	<div class="content">
		<form action="kirim.php" method="POST">
			<?php 
			if(empty($email))
			{ ?> 
			<input type="email" class="fail" name="email" placeholder="harap masukkan email atau nomor telepon anda!"><img src="fail.png"
			width="17" weight="17"><br>
			<?php } else { ?>
			<input type="email" class="done" name="email" value="<?php echo $_POST["email"]?>"><br>
			<?php } ?>
			<?php 
			if(empty($fullname))
			{ ?>
			<input type="text" class="fail"	name="fullname" placeholder="harap masukkan nama lengkap!"><img src="fail.png"
			width="17" weight="17"><br>
			<?php } else { ?>
			<input type="text" class="done"	name="fullname" value="<?php echo $_POST["fullname"]?>"><br>
			<?php } ?>
			<?php 
			if(empty($user))
			{ ?>
			<input type="text" class="fail"	name="user" placeholder="harap masukkan username!"><img src="fail.png"
			width="17" weight="17"><br>
			<?php } else { ?>
			<input type="text" class="done"	name="user" value="<?php echo $_POST["user"]?>"><br>
			<?php } ?>
			<?php 
			if(empty($pw))
			{ ?>
			<input type="password" class="fail" name="pw" placeholder="harap masukkan kata sandi!"><img src="fail.png"
			width="17" weight="17"><br>
			<?php } else { ?>
			<input type="password" class="done" name="pw" value="<?php echo $_POST["pw"]?>"><br>
			<?php } ?>
			<input type="submit" name="singup" value="daftar">
		</form>	
	</div>

		<div class="Footer">
		By Signing Up, you agree to our <br>
		<a>Terms</a> & <a>Privacy Policy.</a>
		</div>
</div>
</body>
</html>
<?php }
else if (empty($email) )
		{ ?>
		<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Instagram</title>
	<link rel="stylesheet" href="style2.css">
</head>
<body bgcolor="#F1F1F1">
<div id ="container"> 

	<div class="Header">
		Instagram
	</div>

	<div class="subheader">
		daftar untuk melihat foto dan video <br>
		dari teman-temanmu.
	</div>
	

	<div class="button">
	<a>
		<img src="fb.png" width="17" weight="17">
		<input type="submit" value="masuk dengan facebook."></a>
	</div>
	<div id="line">
	<center>
	<table>
	<tr>
	<td><div class="up">------------------------------ O</div></td>
	<a><td><div class="up">R ----------------------------</div></td></a>
	</tr>
	</table>
	</center>
	</div>
	<div class="content">
				<form action="kirim.php" method="POST">
			<?php 
			if(empty($email))
			{ ?> 
			<input type="email" class="fail" name="email" placeholder="harap masukkan email atau nomor telepon anda!"><img src="fail.png"
			width="17" weight="17"><br>
			<?php } else { ?>
			<input type="email" class="done" name="email" value="<?php echo $_POST["email"]?>"><br>
			<?php } ?>
			<?php 
			if(empty($fullname))
			{ ?>
			<input type="text" class="fail"	name="fullname" placeholder="harap masukkan nama lengkap!"><img src="fail.png"
			width="17" weight="17"><br>
			<?php } else { ?>
			<input type="text" class="done"	name="fullname" value="<?php echo $_POST["fullname"]?>"><br>
			<?php } ?>
			<?php 
			if(empty($user))
			{ ?>
			<input type="text" class="fail"	name="user" placeholder="harap masukkan username!"><img src="fail.png"
			width="17" weight="17"><br>
			<?php } else { ?>
			<input type="text" class="done"	name="user" value="<?php echo $_POST["user"]?>"><br>
			<?php } ?>
			<?php 
			if(empty($pw))
			{ ?>
			<input type="password" class="fail" name="pw" placeholder="harap masukkan kata sandi!"><img src="fail.png"
			width="17" weight="17"><br>
			<?php } else { ?>
			<input type="password" class="done" name="pw" value="<?php echo $_POST["pw"]?>"><br>
			<?php } ?>
			<input type="submit" name="singup" value="daftar">
		</form>		
	</div>

		<div class="Footer">
		dengan mendaftar anda setuju dengan <br>
		<a>Persyaratan, kondisi</a> & <a>keamanan kita.</a>
		</div>
</div>
</body>
</html>
<?php }
else if (empty($user))
		{ ?>
		<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Instagram</title>
	<link rel="stylesheet" href="style2.css">
</head>
<body bgcolor="#F1F1F1">
<div id ="container"> 

	<div class="Header">
		Instagram
	</div>

	<div class="subheader">
		daftar untuk melihat foto dan video <br>
		dari teman-temanmu.
	</div>
	

	<div class="button">
	<a>
		<img src="fb.png" width="17" weight="17">
		<input type="submit" value="masuk dengan facebook."></a>
	</div>
	<div id="line">
	<center>
	<table>
	<tr>
	<td><div class="up">------------------------------ O</div></td>
	<a><td><div class="up">R ----------------------------</div></td></a>
	</tr>
	</table>
	</center>
	</div>
	<div class="content">
				<form action="kirim.php" method="POST">
			<?php 
			if(empty($email))
			{ ?> 
			<input type="email" class="fail" name="email" placeholder="harap masukkan email atau nomor telepon anda!"><img src="fail.png"
			width="17" weight="17"><br>
			<?php } else { ?>
			<input type="email" class="done" name="email" value="<?php echo $_POST["email"]?>"><br>
			<?php } ?>
			<?php 
			if(empty($fullname))
			{ ?>
			<input type="text" class="fail"	name="fullname" placeholder="harap masukkan nama lengkap!"><img src="fail.png"
			width="17" weight="17"><br>
			<?php } else { ?>
			<input type="text" class="done"	name="fullname" value="<?php echo $_POST["fullname"]?>"><br>
			<?php } ?>
			<?php 
			if(empty($user))
			{ ?>
			<input type="text" class="fail"	name="user" placeholder="harap masukkan username!"><img src="fail.png"
			width="17" weight="17"><br>
			<?php } else { ?>
			<input type="text" class="done"	name="user" value="<?php echo $_POST["user"]?>"><br>
			<?php } ?>
			<?php 
			if(empty($pw))
			{ ?>
			<input type="password" class="fail" name="pw" placeholder="harap masukkan kata sandi!"><img src="fail.png"
			width="17" weight="17"><br>
			<?php } else { ?>
			<input type="password" class="done" name="pw" value="<?php echo $_POST["pw"]?>"><br>
			<?php } ?>
			<input type="submit" name="singup" value="daftar">
		</form>		
	</div>

		<div class="Footer">
		dengan mendaftar anda setuju dengan <br>
		<a>Persyaratan, kondisi</a> & <a>keamanan kita.</a>
		</div>
</div>
</body>
</html>
<?php }
else if (empty($pw))
		{ ?>
		<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Instagram</title>
	<link rel="stylesheet" href="style2.css">
</head>
<body bgcolor="#F1F1F1">
<div id ="container"> 

	<div class="Header">
		Instagram
	</div>

	<div class="subheader">
		daftar untuk melihat foto dan video <br>
		dari teman-temanmu.
	</div>
	

	<div class="button">
	<a>
		<img src="fb.png" width="17" weight="17">
		<input type="submit" value="masuk dengan facebook."></a>
	</div>
	<div id="line">
	<center>
	<table>
	<tr>
	<td><div class="up">------------------------------ O</div></td>
	<a><td><div class="up">R ----------------------------</div></td></a>
	</tr>
	</table>
	</center>
	</div>
	<div class="content">
				<form action="kirim.php" method="POST">
			<?php 
			if(empty($email))
			{ ?> 
			<input type="email" class="fail" name="email" placeholder="harap masukkan email atau nomor telepon anda!"><img src="fail.png"
			width="17" weight="17"><br>
			<?php } else { ?>
			<input type="email" class="done" name="email" value="<?php echo $_POST["email"]?>"><br>
			<?php } ?>
			<?php 
			if(empty($fullname))
			{ ?>
			<input type="text" class="fail"	name="fullname" placeholder="harap masukkan nama lengkap!"><img src="fail.png"
			width="17" weight="17"><br>
			<?php } else { ?>
			<input type="text" class="done"	name="fullname" value="<?php echo $_POST["fullname"]?>"><br>
			<?php } ?>
			<?php 
			if(empty($user))
			{ ?>
			<input type="text" class="fail"	name="user" placeholder="harap masukkan username!"><img src="fail.png"
			width="17" weight="17"><br>
			<?php } else { ?>
			<input type="text" class="done"	name="user" value="<?php echo $_POST["user"]?>"><br>
			<?php } ?>
			<?php 
			if(empty($pw))
			{ ?>
			<input type="password" class="fail" name="pw" placeholder="harap masukkan kata sandi!"><img src="fail.png"
			width="17" weight="17"><br>
			<?php } else { ?>
			<input type="password" class="done" name="pw" value="<?php echo $_POST["pw"]?>"><br>
			<?php } ?>
			<input type="submit" name="singup" value="daftar">
		</form>		
	</div>

		<div class="Footer">
		dengan mendaftar anda setuju dengan <br>
		<a>Persyaratan, kondisi</a> & <a>keamanan kita.</a>
		</div>
</div>
</body>
</html>
<?php }
else { ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Instagram</title>
	<link rel="stylesheet" href="style2.css">
</head>
<body>
<div id="con">
<div class="logo">
Instagram
</div>
<div class="text">
Selamat <a><?php echo $_POST["fullname"]; ?></a>!<br> kamu telah terdaftar ke Instagram dengan username <a>@<?php echo $_POST["user"]; ?></a>, mohon memeriksa<br> email anda <a><?php echo $_POST["email"]; ?></a> untuk meng-aktifkan akun anda
</div>
</body>
</html>
<?php } ?>