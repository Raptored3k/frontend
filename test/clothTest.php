<?php 
	$directory = $_SERVER['DOCUMENT_ROOT'];
	include($directory."/database/clothes.php");
	$clothes = new Clothes("kobiety");
	echo $clothes->getClothesList()[0]->innerHTML();
?>