<?php
require 'conx/db.php';

		if(isset($_POST["submit"])); {
		$kodprog = strtoupper($_POST["kodprog"]);
		$namaprog = strtoupper($_POST["namaprog"]);
		$tahap = ($_POST["tahap"]);
		$tmula = $_POST["tmula"];
		$ttamat = $_POST["ttamat"];


			$addprog = "INSERT INTO prog (kod_prog, nama_prog, tahap, tmula, ttamat)
			VALUES ('$kodprog','$namaprog', '$tahap', '$tmula', '$ttamat')";

			if (!mysqli_query($dbc,$addprog)) {
				echo "Error: " . mysql_errno() . mysqli_error($dbc);
			} /*else {
				echo "Pusat Bertauliah Berjaya Didaftarkan.";

			}*/
			mysqli_close($dbc);
			// header('Location: view.php');
		}
?>
<!DOCTYPE html>
<html>
<head>
	<?php include ('hnf.php'); ?>
	<title>Sistem Permohonan Internship</title>
</head>
<body>
	<form class="form-horizontal" name="view_prog">
		<fieldset class="daftar">
			<legend class="label label-warning" id="program"><strong>Daftar Program Pusat Bertauliah</strong></legend>
					<div class="form-group">
					<span class="label label-success">Kod Program</span>
						<div class="col-lg-6">
							<div class="view"><?php echo $row['kod_prog']; ?></div>
						</div>
					</div>
					<div class="form-group">
						<span class="label label-success">Nama Program</span>
						<div class="col-lg-6">
							<input class="form-control" id="namaprog" name="namaprog" placeholder="Nama Program" style="text-transform: uppercase" type="text" maxlength="100" required />
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
							<input class="form-control" id="tarikhmula" name="tarikhmula" type="date" placeholder="" required />
							<h5 style="color: red">Sila masukkan Tarikh seperti contoh : <strong style="color: black">YYYY/MM/DD</strong></h5>
						</div>
					</div>
					<div class="form-group">
						<span class="label label-success">Tarikh Tamat Tauliah</span>
						<div class="col-lg-6">
							<input class="form-control" id="tarikhtamat" name="tarikhtamat" type="date" placeholder="" required />
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