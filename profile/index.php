<!doctype html>
<html lang="en">
  	<?php
		session_start();
		$directory = $_SERVER['DOCUMENT_ROOT'];
		$home = "http://".$_SERVER['SERVER_NAME'];
		include($directory."/login.php");
		
		if(!isset($_SESSION['user'])){
			header('location: '.$home);
		}
	?>  
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Bowlby+One+SC&display=swap" rel="stylesheet">

  </head>
  <body>  
    <header>
        <div class="container">
            <div class="row">
               <div class="col-md-3 col-12 text-left header-link">
                <a href=""><h1 class="site-title display-4 m-2">Ciuszek</h1></a>
               </div>

               <div class="col-md-5 col-12 text-center">
                   
               </div>

               <div class="col-md-1 col-12 text-right">
                    <p class="my-md-4 "><i class="fas fa-shopping-basket"></i></p>
               </div>
				   <?php
					if(!isset($_SESSION['user'])): ?>
					   <?php /* open drag menu if form was send already */
					   if (isset($_POST['login_user'])) : ?>
					   <button id="clickedOnLoad" class="btn border dropdown my-md-4 " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" > Zaloguj
					   <?php else : ?>
					   <button class="btn border dropdown my-md-4 " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" > Zaloguj
					   <?php endif; ?>
					   </button>
					   
					   <div class="dropdown-menu"> 
								<form class="px-4 py-3" method="post" action="/index.php">
									<div class="form-group">
										<label for="exampleDropdownFormEmail1">Adres Email</label>
										<input name="email" type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
									</div>
									<div class="form-group">
										<label for="exampleDropdownFormPassword1">Hasło</label>
										<input name="password" type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
									</div>
									<div class="form-check">
										<input type="checkbox" class="form-check-input" id="dropdownCheck">
										<label class="form-check-label" for="dropdownCheck">Zapamiętaj</label>
									</div>
									<div class="form-button">
									<button type="submit" name="login_user" class="btn btn-primary my-2">Zaloguj</button>
									</div>
								</form>
								<div class="dropdown-divider"></div>
								<span class="dropdown-item"><?php echo $loginError; ?></span>
								<a class="dropdown-item" href="#">Nie masz konta? Zarejestruj się</a>
								<a class="dropdown-item" href="#">Zapomniałeś hasła?</a>
						</div> 
					<?php else: ?>
						<button class="btn border dropdown my-md-4 " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" > Mój Profil
						</button>
						<div class="dropdown-menu"> 
								   <a href="/profile" class="dropdown-item">Profil</a> 
								   <a href="/logout.php" class="dropdown-item">Wyloguj się</a>
						</div> 
					<?php endif; ?>
               </div>
            </div>
        </div>

        <div class="container-fluid p-0 border mb-5">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active px-4 py-2">
                      <a class="nav-link" href="http://34.89.211.175/"><h5>Home</h5> </a>
                    </li>
                    <li class="nav-item active px-4 py-2">
                      <a class="nav-link" href="/filter?gender=kobiety"><h5>Kobiety</h5></a>
                    </li>
                    <li class="nav-item active px-4 py-2">
                        <a class="nav-link" href="/filter?gender=mezczyzni"><h5>Mężczyźni</h5></a>
                    </li>
                    <li class="nav-item active px-4 py-2">
                        <a class="nav-link" href="#"><h5>Kontakt</h5></a>
                    </li>
                    <li class="nav-item active px-4 py-2">
                        <a class="nav-link" href="#"><h5>O nas</h5></a>
                    </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
                  </form>
                </div>
              </nav>
        </div>
    </header>
	<main>
		<?php
			$user = unserialize($_SESSION['user']);
			echo $user->getWallet()->getBalance();
		?>
	</main>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/712d4f9a10.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

</body>
</html>