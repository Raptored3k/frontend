<!-- profile -->
<!doctype html>
<html lang="en">
	<?php
		session_start();
		$home = "http://".$_SERVER['SERVER_NAME'];
		$directory = $_SERVER['DOCUMENT_ROOT'];
		$reqestUrl = $uri_parts = explode('?', $_SERVER['REQUEST_URI'], 2);
		//set '/' when in url didn't occur param or precision url
		if(!isset($reqestUrl[0])) $reqestUrl[0] = "";
		if(!isset($reqestUrl[1])) $reqestUrl[1] = "";
		else
			$reqestUrl[1] = '?'.$reqestUrl[1];//add ? at start of string to create correct param url
		include($directory."/elements/login.php");
		include($directory."/elements/register.php");
	?> 
  <head>
    <title>Cenere</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- navi style -->
    <link rel="stylesheet" <?php echo "href='".$home."/elements/style.css'"?>>
	<!-- database style -->
    <link rel="stylesheet" <?php echo "href='".$home."/database/style.css'"?>>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Bowlby+One+SC&display=swap" rel="stylesheet">
	<link href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-font-face.min.css" media="all" rel="stylesheet">
	<style>
	</style>
  </head>

	<?php include($directory."/elements/header.php");?>
  <body>
	<main>
		<div class="basketCont">
		</div>
		<div class="basketPrice">
		</div>
		<?php if(isset($_SESSION['user'])):?>
		<div class="container">
			<div class="row align-items-center border-bottom">
				<div class="col-md-4 text-center p-2"><h3 class="font-weight-bold">PRODUKT</h3></div>
				<div class="col-md-4 text-center border-left border-right p-2"><h3 class="font-weight-bold">ROZMIAR / ILOŚĆ</h3></div>
				<div class="col-md-4 text-center p-2"><h3 class="font-weight-bold">CENA</h3></div>
			</div>
			<div class="row align-items-center border-bottom">
				<div class="col-md-4 text-center  p-2 "><h5>Nazwa produktu ni</h5></div>
				<div class="col-md-4 text-center  p-4 border-left border-right">
					<select name='rozmiar' class='custom-select'>
						<option value='xs'> XS </option>
							<option value='s'> S </option>
							<option value='m'> M </option>
							<option value='l'> L </option>
							<option value='x'> XL </option>
							<option value='xxl'> XXL </option>
					</select> 
					<input type="number" placeholder="Wybierz ilość" min="0" class="form-control mt-2">
				</div>
			<div class="col-md-4 text-center p-2"><h5> CENA TU MA BYĆ</h5></div>
			</div>

			<div class="row align-items-center border-bottom">
				<div class="col-md-4 text-center  p-2 "><h5>Nazwa produktu ni</h5></div>
				<div class="col-md-4 text-center  p-4 border-left border-right">
					<select name='rozmiar' class='custom-select'>
						<option value='xs'> XS </option>
							<option value='s'> S </option>
							<option value='m'> M </option>
							<option value='l'> L </option>
							<option value='x'> XL </option>
							<option value='xxl'> XXL </option>
					</select> 
					<input type="number" placeholder="Wybierz ilość" min="0" class="form-control mt-2">
				</div>
			<div class="col-md-4 text-center p-2"><h5> CENA TU MA BYĆ</h5></div>
			</div>
			
			<div class="row align-items-center border-bottom">
				<div class="col-md-4 text-center  p-2 "><h5>Nazwa produktu ni</h5></div>
				<div class="col-md-4 text-center  p-4 border-left border-right">
					<select name='rozmiar' class='custom-select'>
							<option value='xs'> XS </option>
							<option value='s'> S </option>
							<option value='m'> M </option>
							<option value='l'> L </option>
							<option value='x'> XL </option>
							<option value='xxl'> XXL </option>
					</select> 
					<input type="number" placeholder="Wybierz ilość" min="0" class="form-control mt-2">
				</div>
			<div class="col-md-4 text-center p-2"><h5> CENA TU MA BYĆ</h5></div>
			</div>
			<div class="col-12 text-center py-5"><button class="btn btn-outline-secondary btn-lg" id="buy">PRZEJDŹ DO PŁATNOŚCI</button></div>
			
		</div>
		
		<?php else: ?>
		<div class="col-12 text-center"><h1>ZALOGUJ SIĘ ABY PRZEJŚĆ DO PŁATNOŚCI</h1></div>
		<?php endif ?>
		<div id="result"></div>
	</main>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/712d4f9a10.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script src="script.js"></script>
	<!-- navi script -->
	<script <?php echo "src='".$home."/elements/script.js'"?>></script>
	<!-- database script -->
	<script <?php echo "src='".$home."/database/script.js'"?>></script>
</body>
</html>