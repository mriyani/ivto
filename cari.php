<?php
if(!empty($_POST['searchVal'])) { //check method POST 'searcVal'
		require_once('conx/db.php'); //require_once db connection
		$output = '';
		$cari = strtoupper($_POST['searchVal']);
		$cari = mysqli_real_escape_string($dbc,$_POST['searchVal']);
		//$cari = preg_replace("#[^0-9a-z]#i","",$cari);


		$query = mysqli_query($dbc,"SELECT prog.kod_prog, prog.nama_prog, pb.namapb
			FROM prog INNER JOIN pb ON prog.id_pb = pb.id_pb
			WHERE prog.kod_prog LIKE '%$cari%' OR prog.nama_prog LIKE '%$cari%'");

		$count = mysqli_num_rows($query);

		if($count == 0) {

			$output = 'Carian Kod atau Nama Program tiada di dalam pangkalan data!!!';

		} else {
            $output ='<div> Nama PB Kod Program Nama Program</div><br>';
			while ($row = mysqli_fetch_assoc($query)) {
				$namapb = $row['namapb'];
				$kod_prog = $row['kod_prog'];
				$nama_prog = $row['nama_prog'];

				$output .= '<div>'.$namapb.' '.$kod_prog.' '.$nama_prog.'</div><br>';

			}//end while loop

		}//end else

	}//end if(isset($_POST['cari']))
	echo ($output);
?>
