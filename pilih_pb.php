<?php
require_once('conx/db.php');
$id_prog=$_POST['id_prog'];
$hasil="";

if($_POST)
{
	
	$hasil="<table class='table table-hover table-striped table-condensed'>";
        $hasil.="<thead>";
          $hasil.="<tr>";
		           $hasil.="<th>Kod Pusat Bertauliah</th>";
                   $hasil.="<th>Nama Pusat Bertauliah</th>";
			
			
         $hasil.="</tr>";
        $hasil.="</thead>";
        $hasil.="<tbody id='senarai_pb'>";
        
      
$prog=mysqli_query($dbc,"SELECT pb.*,pb_prog.* FROM pb LEFT JOIN pb_prog ON pb.id_pb = pb_prog.id_pb
where pb_prog.id_prog = $id_prog");
while($r_prog=mysqli_fetch_array($prog)) {

    
//	$hasil.="<tr><input type='hidden' id='id_personal' value='".$r_penyelia['id_personal']."'>";
	$hasil.="<tr style='cursor: pointer' id='pb_pilihan' value='".$r_prog['id_pb_prog']."'>";
	$hasil.="<td id='id_prog'>".$r_prog['kodpb']."</td>";
	$hasil.="<td  id='id_prog'>".$r_prog['namapb']."</td>" ;
	$hasil.="</tr>";


}   $hasil.="</tbody>";
       $hasil.="</table>";
}
echo $hasil;
?>