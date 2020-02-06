<?php
session_start();
try
{
	$connect = new PDO('mysql:host=localhost;dbname=devoir;charset=utf8', 'root', '');
}
catch(PDOException $e) {
	echo $e->getMessage();
}
?>
