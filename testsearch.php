<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>PHP, jQuery Search</title>
<?php include ('menu.php'); ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
<script type="text/javascript">

$( document ).ready(function() {
	//alert('test');
$("#nama_program").change(function(){

//alert('test');

}
);


$(function(){
$("#nama_program").keyup(function() { 

    var nama_program = $(this).val();
    var dataString = 'search='+ nama_program;

    if(nama_program!='') {
        $.ajax({
        type: "POST",
        url: "search.php",
        data: dataString,
        cache: false,
            success: function(html) {
                $("#senarai_program").html(html).show();
             
        	}
        });
    }return false;    
});

	
	$("#senarai_program").on("click",'tr',function(e){ 
	
	e.preventDefault();
    var id_prog = $(this).attr('value');
	alert(id_prog);
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
</head>
<body>
    <div class="content">
        <input type="text" class="form-control" autocomplete="off" id="nama_program" placeholder="Kod Program / Nama Program" />
        <div id="senarai_program"></div>
    </div>
   
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>