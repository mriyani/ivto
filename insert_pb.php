<?php
require_once ('conx/db.php');
	if(isset($_POST["submit"])) {
			$kodpb = strtoupper($_POST["kodpb"]);
			$jenispb = $_POST["jenispb"];
			$namapb = strtoupper($_POST["namapb"]);
			$notel = $_POST["notel"];
			$email = $_POST["email"];
			$negeri	= $_POST["negeri"];
			$poskod	= $_POST["poskod"];
			$alamatpb = strtoupper($_POST["alamatpb"]);
			
			$check = mysqli_query($dbc, "SELECT * FROM pb WHERE kodpb='$kodpb' OR namapb='$namapb'");
			$checkrow = mysqli_num_rows($check);
			if ($checkrow>0) {
				echo "<div class='msg'>Pusat Bertauliah Telah Ada Di Dalam Rekod</div>";
			} else {
				$add = "INSERT INTO pb (kodpb, jenispb, namapb, alamatpb, notel, email, negeri, poskod)
				VALUES ('$kodpb', '$jenispb', '$namapb', '$alamatpb', '$notel', '$email', '$negeri', '$poskod')";
				mysqli_query($dbc,$add);
			//	if (!mysqli_query($dbc,$add)) {
				//	echo "Error: " . mysql_errno() . mysqli_error($dbc);
			//	} else { 
				$last_id = mysqli_insert_id($dbc); 
				
			}
	}

	 $sel = "SELECT * FROM pb WHERE id_pb = '$last_id'";

	 $result = mysqli_query($dbc,$sel);

	 $row = mysqli_fetch_assoc($result);

	 mysqli_close($dbc);
			
?>
<!DOCTYPE html>
<html>
<head>
	<?php include ('hnf.php'); ?>
	<title>Sistem Permohonan Internship</title>
</head>
<body>
	<form class="form-horizontal">
		<fieldset class="daftar">
			<legend id="view" class="label label-warning"><strong>Maklumat Pusat Bertauliah</strong></legend>
			<div class="form-group">
				<span class="label label-success">Kod PB</span>
				<div class="col-lg-6">
					<div class="view"><?php echo $row['kodpb']; ?></div>
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
	</form>
</body>
</html>