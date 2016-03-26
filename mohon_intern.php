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
	
$("#nama_program").change(function(){

alert('masukkan sql cari pb berdasarkan program kat sini');

}
);



$(function(){
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
});



	
	$("#senarai_program").on("click",'tr',function(e){ 
	
	 e.preventDefault();
    var id_prog = $(this).attr('value');
	//alert(id_prog);
	var kod_prog=$(this).closest('tr').children('td.kod_prog').text();
	var nama_prog=$(this).closest('tr').children('td.nama_prog').text();
	var program = kod_prog.concat(" - ",nama_prog)

	$('#nama_program').val(program);
	
	
});
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


});
</script>
	<form class="form-horizontal" name="profile" action="logout.php" method="POST">
		<fieldset class="daftar">
		<legend class="label label-warning"><strong>Mohon Pusat Bertauliah Internship</strong></legend>
			<div class="form-group">
				<span class="label label-success">Carian Kod Program</span>
				<div class="col-md-5">
					<div class="view" name="name"></div>
					<div class="content">
						<input type="text" class="form-control" autocomplete="off" id="nama_program" placeholder="Kod Program / Nama Program" />
						<div id="senarai_program"></div>
					</div>
				</div>
			</div>
		</fieldset><br>
	</form>
</body>
</html>