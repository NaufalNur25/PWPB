<?php 
 	session_start();
	$host='localhost';
	$user='root';
	$pass='';
	$db='pwpb';

	$mysqli = mysqli_connect($host, $user, $pass, $db)
			or die('Database tidak dapat terhubung!');
 ?>