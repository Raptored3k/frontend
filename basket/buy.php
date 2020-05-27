<?php
	session_start();
	$directory = $_SERVER['DOCUMENT_ROOT'];
	$home = "http://".$_SERVER['SERVER_NAME'];
	include($directory."/database/user.php");
	include($directory."/database/clothBasket.php");
	include($directory."/database/order.php");
	
	$arrayStr = $_POST['basket'];
	//if basket is empty
	if(strlen($arrayStr)<=0){
		exit();
	}
	
	$clothBasket = new ClothBasket($arrayStr);
	$user = unserialize($_SESSION['user']);
	//Add order to database
	//order __construct($user_id, $clothesList, $price)
	$order = new order($user->getID(), $clothBasket->getClothesList(), $clothBasket->getBusketPrice());
	$id = strval($order->getID());
	echo "$home/order/?order=$id";
?>