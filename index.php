<!DOCTYPE html>
<html>
<head>
	<title>Sistem Permohonan Internship</title>
	<?php include ('hnf.php'); ?>
</head>
<body>
	<form class="form-horizontal" name="daftarpb" action="insert_pb.php" method="POST">
		<fieldset class="daftar">
			<legend class="label label-warning"><strong>Daftar Pusat Bertauliah</strong></legend>
					<div class="form-group">
					<span class="label label-success">Kod PB</span>
						<div class="col-lg-6">
							<input class="form-control" id="kodpb" name="kodpb" placeholder="Kod PB" style="text-transform: uppercase" type="text" maxlength="6" required>
						</div>
					</div>
					<div class="form-group">
					<span class="label label-success">Jenis PB</span>
						<div class="col-lg-6">
							<!-- <input class="form-control" id="kodpb" name="kodpb" placeholder="Jenis PB" style="text-transform: uppercase" type="text" maxlength="6"> -->
							<select class="form-control" id="jenispb" name="jenispb" required>
								<option></option>
								<option>INDUSTRI</option>
								<option>KERAJAAN</option>
								<option>PERSATUAN / PERTUBUHAN</option>
								<option>SWASTA</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<span class="label label-success">Nama PB</span>
						<div class="col-lg-6">
							<textarea class="form-control" id="namapb" name="namapb" placeholder="Nama PB" style="text-transform: uppercase" type="text" maxlength="100" rows="3" required></textarea>
						</div>
					</div>
					<div class="form-group">
						<span class="label label-success">No. Tel</span>
						<div class="col-lg-6">
							<input class="form-control" id="notel" name="notel" placeholder="No. Tel" type="text" maxlength="10" required>
							<h5 style="color: red">Sila masukkan No. Tel seperti contoh : <strong style="color: black">0123456789</strong></h5>
						</div>
					</div>
					<div class="form-group">
						<span class="label label-success">Email</span>
						<div class="col-lg-6">
							<input class="form-control" id="email" name="email" placeholder="email@domain" type="text" maxlength="50" required>
						</div>
						</div>
					</div>
					<div class="form-group">
						<span class="label label-success">Negeri</span>
						<div class="col-lg-6">
							<!-- <input class="form-control" id="negeri" name="negeri" placeholder="Negeri" style="text-transform: uppercase" type="text" maxlength="30"> -->
							<select class="form-control" id="negeri" name="negeri" required>
								<option></option>
								<option>JOHOR</option>
								<option>KEDAH</option>
								<option>KELANTAN</option>
								<option>KUALA LUMPUR</option>
								<option>LABUAN</option>
								<option>MELAKA</option>
								<option>NEGERI SEMBILAN</option>
								<OPTION>PAHANG</OPTION>
								<option>PERAK</option>
								<option>PERLIS</option>
								<option>PULAU PINANG</option>
								<option>PUTRAJAYA</option>
								<option>SABAH</option>
								<option>SARAWAK</option>
								<option>SELANGOR</option>
								<option>TERENGGANU</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<span class="label label-success">Alamat</span>
						<div class="col-lg-6">
							<textarea class="form-control" id="alamatpb" name="alamatpb" placeholder="Alamat" style="text-transform: uppercase" type="text" maxlength="200" rows="3" required></textarea>
						</div>
					</div>
					<div class="form-group">
						<span class="label label-success">Poskod</span>
						<div class="col-lg-6">
							<input class="form-control" id="poskod" name="poskod" placeholder="Poskod" type="text" maxlength="6" required>
						</div>
					</div>
				</fieldset><br>
			<div class="container" align="center">
				<button type="submit" name="submit" class="btn btn-info">Simpan</button>
			</div><br>
	</form>
</body>
</html>