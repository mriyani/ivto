<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();
if(isset($_SESSION['id_user'])) {
} else {
	header('Location: index.php');
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
<script type="text/javascript">

$( document ).ready(function() {

//search nama program
$(function(){

//cari nama program setiap kali taip	
$("#nama_program").keyup(function() 
{ 

var nama_program = $(this).val();
var dataString = 'search='+ nama_program;

if(nama_program!='')
{
    $.ajax({
    type: "POST",
    url: "search.php",
    data: dataString,
    cache: false,
    success: function(html)
    {
    $("#senarai_program").html(html).show();
     
	}
    });
}return false;    
});  //end $("#nama_program").keyup(function



$("#senarai_program").on("click",function(e){ 
//$(document).on("click", function(e) { 
    var $clicked = $(e.target);
    if (! $clicked.hasClass("search")){
    $("#senarai_program").fadeOut(); 
    }
}); 

$('#nama_program').click(function(){
    $("#senarai_program").fadeIn();
}); 
});


//paparkan senarai pusat bertauliah yang tawar program yang dipilih
	$("#senarai_program").on("click",'tr',function(e){ 
	
	 e.preventDefault();
    var id_prog = $(this).attr('value');

	var kod_prog=$(this).closest('tr').children('td.kod_prog').text();
	var nama_prog=$(this).closest('tr').children('td.nama_prog').text();
	var program = kod_prog.concat(" - ",nama_prog)

	$('#nama_program').val(program);
	
  $.ajax({
    method: "POST",
    url: "pilih_pb.php",
    data: { id_prog : id_prog },
    success: function(html)
    {
    $("#senarai_pb").append(html);
     
	}
    }); 
	
}); //emd $("#senarai_program").on("click",'tr',function(e)

});
</script>
	<form class="form-horizontal" name="profile" action="logout.php" method="POST">
		<fieldset class="daftar">
		<legend class="label label-warning"><strong>Mohon Pusat Bertauliah Internship</strong></legend>
			<div class="form-group">
				<span class="label label-success">Carian Kod Program</span>
				<div class="col-lg-6">
						<input type="text" class="form-control" autocomplete="off" id="nama_program" style="text-transform: uppercase" placeholder="Kod Program / Nama Program" />
						<input type="hidden" id="id_program"/>
						<div id="senarai_program"></div>
				</div>
				<div id="senarai_pb"></div>
			</div>
		</fieldset><br>
	</form>
</body>
</html>