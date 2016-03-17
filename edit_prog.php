<?php
require 'db.php';

		if(isset($_POST["daftarprog"])); {
		$kodprog = strtoupper($_POST["kodprog"]);
		$namaprog = strtoupper($_POST["namapb"]);
		$tahap = strtoupper($_POST["tahap"]);
		$tarikhmula = $_POST["tarikhmula"];
		$tarikhtamat = $_POST["tarikhtamat"];


			$add = "INSERT INTO prog (kodpb, namapb, alamatpb, notel, email, negeri)
			VALUES ('$kodpb','$namapb', '$alamatpb', '$notel', '$email', '$negeri')";

			if (!mysqli_query($dbc,$add)) {
				$last_id = mysqli_insert_id($dbc);
				session_start();
				echo "Error: " . mysql_errno() . mysqli_error($dbc);
			} /*else {
				echo "Pusat Bertauliah Berjaya Didaftarkan.";

			}*/
			mysqli_close($dbc);
			// header('Location: view.php');
		}
?><!DOCTYPE html>
<html>
<head>
	<title>Sistem Permohonan Internship</title>
	<?php include ('hnf.php'); ?>
</head>
<body>
	<form class="form-horizontal" name="daftarprog" action="" method="POST">
		<fieldset class="daftar">
			<legend class="label label-warning" id="program"><strong>Daftar Program Pusat Bertauliah</strong></legend>
					<div class="form-group">
					<span class="label label-success">Kod Program</span>
						<div class="col-lg-6">
							<input class="form-control" id="kodprog" name="kodprog" style="text-transform: uppercase" type="text" maxlength="13">
							<h5 style="color: red">Sila masukkan Tarikh seperti contoh : <strong style="color: black">YYYY/MM/DD</strong></h5>
						</div>
					</div>
					<div class="form-group">
						<span class="label label-success">Nama Program</span>
						<div class="col-lg-6">
							<input class="form-control" id="namaprog" name="namaprog" style="text-transform: uppercase" type="text" maxlength="100" required>
						</div>
					</div>
					<div class="form-group">
						<span class="label label-success">Tahap</span>
						<div class="col-lg-6">
							<!-- <input class="form-control" id="negeri" name="negeri" placeholder="Negeri" style="text-transform: uppercase" type="text" maxlength="30"> -->
							<select class="form-control" id="tahap" name="tahap" required>
								<option></option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<span class="label label-success">Tarikh Mula Tauliah</span>
						<div class="col-lg-6">
							<input class="form-control" id="tarikhmula" name="tarikhmula" required>
							<h5 style="color: red">Sila masukkan Tarikh seperti contoh : <strong style="color: black">YYYY/MM/DD</strong></h5>
						</div>
					</div>
					<div class="form-group">
						<span class="label label-success">Tarikh Tamat Tauliah</span>
						<div class="col-lg-6">
							<input class="form-control" id="tarikhtamat" name="tarikhtamat" required>
							<h5 style="color: red">Sila masukkan Tarikh seperti contoh : <strong style="color: black">YYYY/MM/DD</strong></h5>
						</div>
					</div>
				</fieldset><br>
			<div class="container" align="center">
				<button type="submit" name="submit" class="btn btn-info">Simpan</button>
			</div><br>
	</form>
</body>
</html>