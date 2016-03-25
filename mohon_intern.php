<!DOCTYPE html>
<html>
<head>
	<title>Sistem Permohonan Internship</title>
	<?php include ('hnf.php'); ?>
</head>
<body>
	<form class="form-horizontal" name="profile" action="logout.php" method="POST">
		<fieldset class="daftar">
		<legend class="label label-warning"><strong>Mohon Pusat Bertauliah Internship</strong></legend>
			<div class="form-group">
				<span class="label label-success">Nama</span>
					<div class="col-md-5">
						<div class="view" name="name"></div>
					</div>
			</div>
			<div class="form-group">
				<span class="label label-success">No. Kad Pengenalan</span>
					<div class="col-md-5">
						<div class="view" name="nkp"></div>
					</div>
			</div>
			<div class="form-group">
				<span class="label label-success">Nama Program</span>
					<div class="col-md-5">
						<div class="view" name="nama_prog"></div>
					</div>
			</div>
		</fieldset><br>
	</form>
</body>
</html>