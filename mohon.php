<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();
if(isset($_SESSION['id_user'])) {
	require_once('conx/db.php');
	$id_user =  $_SESSION['id_user'];
	$id_prog = $_POST['$id_prog'];
	$sql = "SELECT  pb.*, prog.kod_prog, prog.nama_prog, user.* FROM pb LEFT JOIN prog ON pb.id_pb = prog.id_pb WHERE user.id_user = '$id_user' ";
	$query = mysqli_query($dbc, $sql);
	$result = mysqli_fetch_assoc($query);
	$name = $result['nama'];
	$ndp = $result['ndp'];
	$nkp = $result['nkp'];
	$kod_prog = $result['kod_prog'];
	$nama_prog = $result['nama_prog'];
} else {
	header('Location: index.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<?php include ('menu.php'); ?>
	<?php include ('hnf.php'); ?>
	<title>Sistem Permohonan Internship</title>
</head>
<body>
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
			<div class="form-group">
				<span class="label label-success">Nama Program</span>
					<div class="col-md-5">
						<div class="view" name="nama_prog"><?php echo "$kod_prog"." - "."$nama_prog"; ?></div>
					</div>
			</div>
		</fieldset><br>
	</form>
</body>
</html>