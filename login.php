<?php
	$directory = $_SERVER['DOCUMENT_ROOT'];
	$home = "http://".$_SERVER['SERVER_NAME'];
	include($directory."/database/databaseLink.php");
	include($directory."/database/user.php");
	$loginError = "";
	//connector to the database
	$connectorDB = new ConnectorDB();
	
	//login function
	
	function login($email, $password, $connectorDB, $encrypted){
		$email = mysqli_real_escape_string($connectorDB, $email);
		$password = mysqli_real_escape_string($connectorDB, $password);
		$isError = false;
		if(empty($email)){	return "Email is required"; $isError = true;}
		if(empty($password)){	return "Password is required"; $isError = true;}
		if (!$isError) {
			if(!$encrypted)
				$password = md5($password);
			$query = "select users.ID as ID, users.email as email, gender.gender as gender, wallets.ID as wallet_id, wallets.balance as balance from users ";
			$query .= "inner join gender on gender.id = users.gender_id ";
			$query .= "inner join wallets on wallets.user_id = users.id ";
			$query .= "where email like '$email' and password like '$password'; ";
			
			$results = $connectorDB -> query($query);
			$result = mysqli_fetch_assoc($results);
			if (mysqli_num_rows($results) > 0) {
				$wallet = new Wallet($result['wallet_id'], $result['balance']);
				//User($ID, $email, $gender, $wallet)
				$user = new User($result['ID'], $result['email'], $result['gender'], $wallet);
				$_SESSION['user'] = serialize($user);
				return "Login successfully";
				if(isset($_POST['remeber'])){
					//remeber user data in cookies
					setcookie("password",$password,time()+86400*30,'/');
					setcookie("email",$email,time()+86400*30,'/');
				}
			
			}else {
				return "Incorrect login data";
			}
		}
	}
	
	//if user wasnt login and in cookie avaiable his email and password
	if(!isset($_SESSION['user'])){
		if(isset($_COOKIE["email"]) && isset($_COOKIE["password"])){
			login($_COOKIE["email"], $_COOKIE["password"], $connectorDB, true);
		}
	}
	//login 
	if (isset($_POST['login_user'])) {
		 $email = $_POST['email'];
		 $password = $_POST['password'];
		 $loginError = login($email, $password, $connectorDB, false);
	}
	$connectorDB -> close();
?>