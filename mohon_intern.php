<?php
	error_reporting(E_ALL & ~E_NOTICE);
	session_start();
	if(isset($_SESSION['id_user'])) { //check passing session
		$id_user = $_SESSION['id_user'];
		//	echo $id_user; */ //checking session, OK!
	} else {
		header('Location: index.php');
	}

	if(!empty($_POST['searchq'])) { //check method POST 'cari'
		require_once('conx/db.php'); //require_once db connection
		$output = '';
		$cari = strtoupper($_POST['searchq']);
		$cari = mysqli_real_escape_string($dbc,$_POST['searchq']);
		//$cari = preg_replace("#[^0-9a-z]#i","",$cari);


		$query = mysqli_query($dbc,"SELECT prog.kod_prog, prog.nama_prog, pb.namapb
			FROM prog INNER JOIN pb ON prog.id_pb = pb.id_pb
			WHERE prog.kod_prog LIKE '%$cari%' OR prog.nama_prog LIKE '%$cari%'");

		$count = mysqli_num_rows($query);

		if($count == 0) {

			$output = 'Carian Kod atau Nama Program tiada di dalam pangkalan data!!!';

		} else {

			while ($row = mysqli_fetch_assoc($query)) {
				$namapb = $row['namapb'];
				$kod_prog = $row['kod_prog'];
				$nama_prog = $row['nama_prog'];

				$output .= '<div>'.$namapb.' '.$kod_prog.' '.$nama_prog.'</div><br>';

			}//end while loop

		}//end else

	}//end if(isset($_POST['cari']))
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sistem Permohonan Internship</title>
	<?php include ('menu.php'); ?>
	<?php include ('hnf.php'); ?>
	<script>
	$(document).ready(function searchq() {
		var searchTxt = $("input[name = 'searchq']").val();

		$.POST("cari.php", {searchVal: searchTxt}, function(output) {
			$("#output").html(output);

		});
	});


	</script>
</head>
<body>
	<form class="form-horizontal" name="mohon" action="mohon_intern.php" method="POST">
		<fieldset class="daftar">
		<legend class="label label-warning"><strong>Mohon Pusat Bertauliah Internship</strong></legend>
			<div class="form-group">
				<span class="label label-success">Carian Kod Program</span>
				<div class="col-lg-6">
						<input type="search" name="searchq" class="form-control" autocomplete="on" id="nama_program" onkeyup="searchq();" style="text-transform: uppercase" placeholder="Kod Program / Nama Program" />
				</div>
				<button type="submit" name="submit" class="btn btn-info"><span class="glyphicon glyphicon-search"></span>  Cari</button>
			</div>
			<br><div class="msg_output" id="output"><?php print ("$output"); ?></div>
	</form>
</body>
</html>