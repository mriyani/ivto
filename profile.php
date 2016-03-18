<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();
if(isset($_SESSION['id'])) {
	require_once('conx/db.php');
	$id =  $_SESSION['id'];
	$sql = "SELECT * FROM user WHERE id = '$id' ";
	$query = mysqli_query($dbc, $sql);
	$result = mysqli_fetch_assoc($query);
	$name = $result['nama'];
	$ndp = $result['ndp'];
	$nkp = $result['nkp'];
} else {
	header('Location: index.php');
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
		<form class="form-horizontal" name="profile" action="logout.php" method="POST">
			<fieldset class="daftar">
			<legend class="label label-warning"><strong>Profile</strong></legend>
				<div class="form-group">
					<span class="label label-success">Nama</span>
						<div class="col-md-5">
							<div class="view" name="name"><?php echo "$name"; ?></div>
						</div>
				</div>
				<div class="form-group">
					<span class="label label-success">No. Kad Pengenalan</span>
						<div class="col-md-5">
							<div class="view" name="nkp"><?php echo "$nkp"; ?></div>
						</div>
				</div>
			</fieldset><br>
				<div class="container" align="center">
					<button type="Submit" name="logout" class="btn btn-info">Logout</a></button>
				</div><br>
		</form>

</body>
</html>