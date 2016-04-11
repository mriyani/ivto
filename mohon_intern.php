<?php
	error_reporting(E_ALL & ~E_NOTICE);
	session_start();
	if(isset($_SESSION['id_user'])) {
		$id_user = $_SESSION['id_user'];
		/*	echo $id_user; */ //checking session, OK!
	} else {
		header('Location: index.php');
	}

	if(isset($_POST['cari'])) {
		require_once('conx/db.php');
		$output = '';
		$cari = $_POST['cari'];
		$cari = preg_replace("#[^0-9a-z]#i","",$cari);


		$query = mysqli_query($dbc,"SELECT prog.kod_prog, prog.nama_prog, pb.namapb
			FROM prog INNER JOIN pb ON prog.id_pb = pb.id_pb
			WHERE prog.kod_prog LIKE '%$cari%' OR prog.nama_prog LIKE '%$cari%'");

		$count = mysqli_num_rows($query);

		if($count == 0) {

			$output = 'Kod atau Nama Program tiada dalam pengkalan data!';

		} else {

			while ($row = mysqli_fetch_assoc($query)) {
				$namapb = $row['namapb'];
				$kod_prog = $row['kod_prog'];
				$nama_prog = $row['nama_prog'];

				$output .='<div class="cari_result">'.$namapb.' '.$kod_prog.' '.$nama_prog.'</div>';

			}

		}

	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sistem Permohonan Internship</title>
	<?php include ('menu.php'); ?>
	<?php include ('hnf.php'); ?>
</head>
<body>
	<form class="form-horizontal" name="mohon" action="mohon_intern.php" method="POST">
		<fieldset class="daftar">
		<legend class="label label-warning"><strong>Mohon Pusat Bertauliah Internship</strong></legend>
			<div class="form-group">
				<span class="label label-success">Carian Kod Program</span>
				<div class="col-lg-6">
						<input type="text" name="cari" class="form-control" autocomplete="off" id="nama_program" style="text-transform: uppercase" placeholder="Kod Program / Nama Program" />
				</div>
				<button type="submit" name="submit" class="btn btn-info"><span class="glyphicon glyphicon-search"></span>  Cari</button>
			</div>
			<div class="msg"><?php echo $output; ?></div>
		</fieldset><br>
	</form>
</body>
</html>