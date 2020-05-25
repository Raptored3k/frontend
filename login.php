<?php
	$directory = $_SERVER['DOCUMENT_ROOT'];
	include($directory."/database/databaseLink.php");
	include($directory."/database/user.php");
	$loginError = "";
	//connector to the database
	$connectorDB = new ConnectorDB();
	
	//login 
	if (isset($_POST['login_user'])) {
		$email = mysqli_real_escape_string($connectorDB, $_POST['email']);
		$password = mysqli_real_escape_string($connectorDB, $_POST['password']);
		$isError = false;
		if(empty($email)){	$loginError = "Email is required"; $isError = true;}
		if(empty($password)){	$loginError = "Password is required"; $isError = true;}
		if (!$isError) {
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
			}else {
				$loginError = "Incorrect login data";
			}
		}
	}
?>