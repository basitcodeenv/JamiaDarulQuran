<?php  
$conx = mysqli_connect('localhost','root','','admin_form');
if (mysqli_error($conx)) {
	die('Error: '.mysqli_error($conx));
}
?>