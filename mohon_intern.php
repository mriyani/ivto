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


		$query = mysqli_query($dbc,"SELECT prog.id_prog, prog.kod_prog, prog.nama_prog, pb.namapb
			FROM prog INNER JOIN pb ON prog.id_pb = pb.id_pb
			WHERE prog.kod_prog LIKE '%$cari%' OR prog.nama_prog LIKE '%$cari%'");

		$count = mysqli_num_rows($query);

		if($count == 0) {

			$output = 'Carian Kod atau Nama Program tiada di dalam pangkalan data!!!';

		} else {
			$output ="<table align='center'><tbody>";
			$output .="<tr><td class='pilihpb' align='center' width='25%'>NAMA PUSAT BERTAULIAH</td><td class='pilihpb' align='center' width='25%''>KOD PROGRAM</td><td class='pilihpb' align='center' width='40%'>NAMA PROGRAM</td><td class='pilihpb' align='center'>SILA PILIH</td></tr>";
			while ($row = mysqli_fetch_assoc($query)) {
				$id_prog = $row['id_prog'];
				$namapb = $row['namapb'];
				$kod_prog = $row['kod_prog'];
				$nama_prog = $row['nama_prog'];
                $output .="<tr><td align='left'> $namapb </td><td align='center'> $kod_prog </td><td align='left'> $nama_prog </td><td><input type='radio' name='id_prog' id='id_prog' value='$id_prog'/></td></tr>";

			}//end while loop
                $output .="</tbody></table><br>";
               
		}//end else

	}//end if(isset($_POST['cari']))
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sistem Permohonan Internship</title>
	<?php include ('menu.php'); ?>
	<?php include ('hnf.php'); ?>
</head>
<body>

	<script>

	$(document).ready(function() {
		//$(document).ready(function searchq() {

			//alert('test');
			
	    function searchq(){
	    alert('test');
	var searchTxt = $("input[name = 'searchq']").val();

			$.POST("cari.php", {searchVal: searchTxt}, function(output) {
				$("#output").html(output);

	    }  );//end function searchq
			
		
	$('#mohon_btn').on('click',function() {
		$.ajax({
        type: "POST",
        url: "mohon.php",
        data: $id_prog:,
        cache: false,
            success: function(html) {
                $("#senarai_program").html(html).show();
             
        	}
        });

	});
	
	}); //end $(document).ready(function() {

	</script>


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
		</fieldset><br>
		<?php 
			   if($output !=''){
			    $button ="<div class='btn_mohon' align='center'>";
				$button .="<button type='button' name='mohon_btn' id='mohon_btn' class='btn btn-info'><a href='mohon.php'> Mohon</a></button>";
		        $button .="</div><br>"; 
		        echo $button; } ?>
	</form>
</body>
</html>