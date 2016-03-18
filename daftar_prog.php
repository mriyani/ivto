<!DOCTYPE html>
<html>
<head>
	<?php include ('hnf.php'); ?>
	<title>Sistem Permohonan Internship</title>
</head>
<body>
	<form class="form-horizontal" name="daftar_prog" action="view_prog.php" method="POST">
		<fieldset class="daftar">
			<legend class="label label-warning" id="program"><strong>Daftar Program</strong></legend>
					<div class="form-group">
					<span class="label label-success">Kod Program</span>
						<div class="col-lg-6">
							<input class="form-control" id="kodprog" name="kodprog" placeholder="Kod Program" style="text-transform: uppercase" type="text" maxlength="13" required />
							<h5 style="color: red">Sila masukkan Kod Program seperti contoh : <strong style="color: black">IT-020-5:2013</strong></h5>
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
							<input class="form-control" id="tmula" name="tmula" type="date" placeholder="" required />
							<h5 style="color: red">Sila masukkan Tarikh seperti contoh : <strong style="color: black">YYYY-MM-DD</strong></h5>
						</div>
					</div>
					<div class="form-group">
						<span class="label label-success">Tarikh Tamat Tauliah</span>
						<div class="col-lg-6">
							<input class="form-control" id="ttamat" name="ttamat" type="date" placeholder="" required />
							<h5 style="color: red">Sila masukkan Tarikh seperti contoh : <strong style="color: black">YYYY-MM-DD</strong></h5>
						</div>
					</div>
				</fieldset><br>
			<div class="container" align="center">
				<button type="submit" name="submit" class="btn btn-info">Simpan</button>
			</div><br>
	</form>
</body>
</html>