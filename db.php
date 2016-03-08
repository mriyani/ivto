<?php 
//'server'.'username','password';
$dbc = @mysqli_connect('localhost','root','','ivto'); 
if (!$dbc) { 
	die('Could not connect to MySQL: ' . mysqli_error()); 
} 
	/*else {
	echo 'Connection OK'; mysqli_close($dbc);
 }*/
?>
