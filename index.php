<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();

if (isset($_POST['submit'])) {
	require_once('conx/db.php');
	$message ="Sila pastikan USERNAME dan PASSWORD anda betul!";
	$uname = strip_tags($_POST['username']);
	$pass = strip_tags($_POST['password']);

	$sql = "SELECT * FROM user WHERE username = '$uname' AND password = '$pass' LIMIT 1";
	$query = mysqli_query($dbc, $sql);
	$checkrow = mysqli_num_rows($query);

	if ($checkrow > 0) { 
		$row = mysqli_fetch_array($query);
		$_SESSION['id'] = $row['id'];;
			header('Location: profile.php');

	} else {
		session_destroy();
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<?php include ('hnf.php'); ?> 
	<title>Sistem Permohonan Internship</title>
</head>
<body>
	<div id="header" class="label label-primary">Sistem Permohonan Internship</div>
	</br></br>
		<form class="form-horizontal" name="login" action="index.php" method="POST">
			<fieldset class="daftar">
			<legend class="label label-warning"><strong>Login</strong></legend>
				<div class="form-group">
					<span class="label label-success">Nama</span>
						<div class="col-md-5">
							<input class="form-control" name="username" placeholder="User Name" type="text" required />
							<!-- <h5 style="color: red">Sila masukkan Kod Program seperti contoh : <strong style="color: black">IT-020-5:2013</strong></h5> -->
						</div>
				</div>
				<div class="form-group">
					<span class="label label-success">Password</span>
						<div class="col-md-5">
							<input class="form-control" name="password" placeholder="Password" type="password" required />
							<!-- <h5 style="color: red">Sila masukkan Kod Program seperti contoh : <strong style="color: black">IT-020-5:2013</strong></h5> -->
						</div>
				</div>
			</fieldset><br>
				<div class="container" align="center">
					<button type="submit" name="submit" class="btn btn-info">Login</button>
				</div><br>
			<div class="msg"><?php echo "$message"; ?></div>
		</form>
	
</body>
</html>