<?php
require_once('conx/db.php');
$hasil="";

if($_POST) {
	
	$hasil="<table class='table table-hover table-striped table-condensed'>";
		$hasil.="<thead>";
			$hasil.="<tr>";
				$hasil.="<th>Kod Program</th>";
				$hasil.="<th>Nama Program</th>";
			$hasil.="</tr>";
		$hasil.="</thead>";
	$hasil.="<tbody id='senarai_program'>";  
	
$q = $_POST['search'];


$prog = mysqli_query($dbc,"SELECT * FROM prog where kod_prog like '%$q%' or nama_prog like '%$q%' order by id_prog LIMIT 5");
while ($r_prog=mysqli_fetch_array($prog)) {
		$kod_prog=$r_prog['kod_prog'];
		$nama_prog=$r_prog['nama_prog'];
		$b_kod_prog='<strong>'.$q.'</strong>';
		$b_nama_prog='<strong>'.$q.'</strong>';
		$final_kod_prog= str_ireplace($q, $b_kod_prog, $kod_prog);
		$final_nama_prog = str_ireplace($q, $b_nama_prog, $nama_prog);
    
		//	$hasil.="<tr><input type='hidden' id='id_personal' value='".$r_penyelia['id_personal']."'>";
		$hasil.="<tr value='".$r_prog['id_prog']."'>";
		$hasil.="<td class='kod_prog' id='kod_prog'>$final_kod_prog</td>";
		$hasil.="<td class='nama_prog' id='nama_prog'>$final_nama_prog</td>" ;
		$hasil.="</tr>";


}   $hasil.="</tbody>";
    $hasil.="</table>";
}
echo $hasil;
?>