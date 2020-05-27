<?php
	$directory = $_SERVER['DOCUMENT_ROOT'];
	$home = "http://".$_SERVER['SERVER_NAME'];
	include($directory."/database/clothBasket.php");
	include($directory."/database/buyClothes.php");

	$arrayStr = $_POST['basket'];
	$outputString = "{\"innerHTML\": \"";
	
	$clothBasket = new ClothBasket($arrayStr);
	$price = $clothBasket->getBusketPrice();
	foreach($clothBasket->getClothesList() as $cloth){
		$outputString .= $cloth->innerHTML($home);
	}
	$outputString .= "\", \"price\": $price }";
	echo $outputString;
?>