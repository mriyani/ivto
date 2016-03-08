<?php require 'db.php'; ?>
<?php
		if(isset($_POST["submit"])); {

		$kodpb = strtoupper($_POST["kodpb"]);
		$jenispb = $_POST["jenispb"];
		$namapb = strtoupper($_POST["namapb"]);
		$notel = $_POST["notel"];
		$email = $_POST["email"];
		$negeri	= $_POST["negeri"];
		$poskod	= $_POST["poskod"];
		$alamatpb = strtoupper($_POST["alamatpb"]);

			$add = "INSERT INTO pb (kodpb, namapb, alamatpb, notel, email, negeri, poskod)
			VALUES ('$kodpb','$namapb', '$alamatpb', '$notel', '$email', '$negeri', '$poskod')";

			if (!mysqli_query($dbc,$add)) {
				echo "Error: " . mysql_errno() . mysqli_error($dbc);
			}

			$sel = "SELECT 'id' FROM pb WHERE kodpb='$kodpb' LIMIT 1";
			$result = mysqli_query($dbc,$sel);

			if (mysqli_num_rows($result) > 0) {
				//output data of each row
				while($row = mysqli_fetch_assoc($result)) {

				}
			}

			// mysqli_close($dbc);
			// header('Location: view.php');
	} 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sistem Permohonan Internship</title>
	<?php include ('hnf.php'); ?>
</head>
<body>
		<div class="container-fluid">
			<span id="header" class="label label-primary">Maklumat Pusat Bertauliah</span>
		</div></br>
		<form class="form-horizontal">
			<fieldset class="daftar">
				<legend id="view" class="label label-warning"><strong>Pusat Bertauliah</strong></legend>
				<div class="form-group">
					<span class="label label-success">Kod PB</span>
					<div class="col-lg-6">
						<div class="view"><?php echo $row['id']; ?></div>
					</div>
				</div>
				<div class="form-group">
					<span class="label label-success">Jenis PB</span>
					<div class="col-lg-6">
						<div class="view"><?php echo $row['jenispb']; ?></div>
					</div>
				</div>
				<div class="form-group">
					<span class="label label-success">Nama PB</span>
					<div class="col-lg-6">
						<div class="view"><?php echo $row['namapb']; ?></div>
					</div>
				</div>
				<div class="form-group">
					<span class="label label-success">No. Tel</span>
					<div class="col-lg-6">
						<div class="view"><?php echo $row['notel']; ?></div>
					</div>
				</div>
				<div class="form-group">
					<span class="label label-success">Email</span>
					<div class="col-lg-6">
						<div class="view"><?php echo $row['email']; ?></div>
					</div>
				</div>
				<div class="form-group">
					<span class="label label-success">Negeri</span>
					<div class="col-lg-6">
						<div class="view"><?php echo $row['negeri'] ?></div>
					</div>
				</div>
				<div class="form-group">
					<span class="label label-success">Alamat</span>
					<div class="col-lg-6">
						<div class="view"><?php echo $row['alamatpb']; ?></div>
					</div>
				</div>
				<div class="form-group">
					<span class="label label-success">Poskod</span>
					<div class="col-lg-6">
						<div class="view"><?php echo $row['poskod']; ?></div>
					</div>
				</div>
			</fieldset><br>
				<!-- <div class="container" align="center">
					<button type="Submit" class="btn btn-info">Simpan</button>
				</div><br> -->
			</form>

<script src="/bootstrap/js/jquery.js"></script>
<script src="/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>