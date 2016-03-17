<?php
require_once 'db.php';
session_start();
echo $last_id;

$sel = "SELECT * FROM pb";

?>
<!DOCTYPE html>
<html>
<head>
	<title>Sistem Permohonan Internship</title>
	<?php include ('hnf.php'); ?>
</head>
<body>
		<form class="form-horizontal">
			<fieldset class="daftar">
				<legend id="view" class="label label-warning"><strong>Pusat Bertauliah</strong></legend>

					<div class="form-group">
					<span class="label label-success">Kod PB</span>
						<div class="col-lg-6">
							<div class="view"><?php echo "$kodpb"; ?></div>
						</div>
					</div>
					<div class="form-group">
					<span class="label label-success">Jenis PB</span>
						<div class="col-lg-6">
							<div class="view"><?php echo "$jenispb"; ?></div>
						</div>
					</div>
					<div class="form-group">
						<span class="label label-success">Nama PB</span>
						<div class="col-lg-6">
							<div class="view"><?php echo "$namapb"; ?></div>
						</div>
					</div>
					<div class="form-group">
						<span class="label label-success">No. Tel</span>
						<div class="col-lg-6">
							<div class="view"><?php echo "$notel"; ?></div>
						</div>
					</div>
					<div class="form-group">
						<span class="label label-success">Email</span>
						<div class="col-lg-6">
							<div class="view"><?php echo "$email"; ?></div>
						</div>
					</div>
					<div class="form-group">
						<span class="label label-success">Negeri</span>
						<div class="col-lg-6">
							<div class="view"><?php echo "$negeri"; ?></div>
						</div>
					</div>
					<div class="form-group">
						<span class="label label-success">Alamat</span>
						<div class="col-lg-6">
							<div class="view"><?php echo "$alamat"; ?></div>
						</div>
					</div>
				</fieldset><br>
			<div class="container" align="center">
				<button type="Submit" class="btn btn-info">Simpan</button>
			</div><br>
		</form>
</body>
</html>