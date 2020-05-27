<?php
	//include necessary class
	include($directory."/database/typeList.php");
	
	//create type list object
	$clothesK = new TypeList('kobiety');
	$clothesM = new TypeList('mezczyzni');
?>
<!-- MODAL -->
<div class="container">
<div class="modal fadeInDown first" id="logowanie" role="dialog">
  <div class="modal-dialog">
	<div class="modal-content">
	  <div class="modal-header fadeIn second" style="padding:35px 50px;">
		<h4><i class="fas fa-user "></i>  Login</h4>
		<button type="button" class="close" data-dismiss="modal">&times;</button>
	  </div>
	  <div class="modal-body" style="padding:40px 50px;">
		<form role="form" method="post" <?php echo "action='".$home.$reqestUrl[0]."index.php/".$reqestUrl[1]."'";?>>
			<div class="form-group fadeIn third">
				<input name="email" type="text" class="form-control border-secondary"  placeholder="Wpisz adres email">
			</div>
			<div class="form-group fadeIn fourth">
				<input name="password" type="password" class="form-control border-secondary"  placeholder="Wpisz hasło">
			</div>
			<div class="custom-control custom-checkbox fadeIn fifth">
				<input type="checkbox" class="custom-control-input" id="remember">
				<label class="custom-control-label" for="remember">Zapamiętaj</label>
			</div>
			
		<div class="form-group fadeIn sixth">
			<span><?php echo $loginError ?></span>
		  </div>
			<button name="login_user" type="submit" class="btn btn-outline-secondary form-rounded btn-block fadeIn fifth"><span class="glyphicon glyphicon-off"></span> Login</button>
		</form>
	  </div>
	  <div class="modal-footer fadeIn sixth">
		<p><a <?php echo "href='".$home."/register'"; ?> class="underlineHover">Zarejestruj się</a></p> <p>|</p>
		<p><a href="#" class="underlineHover">Przypomnij hasło</a></p>
	  </div>
	</div>
	
  </div>
</div> 
</div>
<!-- HEADER -->
<header >
	<div class="container-fluid">
		<div class="row py-2">
		   <div class="col-md-3 col-12 text-center">
			<a <?php echo "href='".$home."'"; ?>><img <?php echo "src='".$home."/elements/logo.png'"; ?>  alt="" class="img-fluid"></a>
		   </div>
		   <div class="col-md-7 col-8 text-center pt-3 ">
				<form class="form-inline p-0 my-lg-0 pl-5 padding">
				  <input class="form-control border-secondary form-rounded form-width" type="search" placeholder="Wyszukaj..." aria-label="Search">
				  <button class="btn btn-outline-secondary ml-1 form-rounded" type="submit"><i class="fas fa-search"></i></button>
				</form>
		   </div>
		   
		   <div class="col-md-2 col-4 pt-3">
				<?php if(!isset($_POST['login_user'])):?>
			   <button class="btn btn-outline-secondary form-rounded"  aria-haspopup="true" aria-expanded="false" data-toggle="modal" data-target="#logowanie"> Zaloguj </button> 
			   <?php else: ?>
			   <button class="btn btn-outline-secondary form-rounded"  id="clicked" aria-haspopup="true" aria-expanded="false" data-toggle="modal" data-target="#logowanie"> Zaloguj </button> 
				<?php endif ?>
			 </div>
		  </div>
	  </div>
	  </header>
	  <header class="sticky-top">
  <div class="container-fluid p-0 border mb-4 ">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active px-4 underlineHover">
				<a class="nav-link" <?php echo "href='".$home."'"; ?>><h5 class="text-center">Home</h5> </a>
				</li>
				<li class="nav-item dropdown active px-4 underlineHover">
				<a class="nav-link " data-toggle="dropdown" <?php echo "href='".$home."/filter/?gender=kobiety'"; ?>><h5 class="text-center">Kobiety</h5></a>
				<div class="dropdown-menu">
					<?php
						foreach ($clothesK->getTypeList() as $type){
							echo "<a href='$home/filter/?gender=kobiety&type=$type' class='dropdown-item'>$type</a>";
						}						
					?>
				</div>
				</li>
				<li class="nav-item active dropdown px-4 underlineHover">
					<a class="nav-link " data-toggle="dropdown"<?php echo "href='".$home."/filter/?gender=mezczyzni'"; ?>><h5 class="text-center">Mężczyzni</h5> </a>
					<div class="dropdown-menu">
					<?php
						foreach ($clothesM->getTypeList() as $type){
							echo "<a href='$home/filter/?gender=mezczyzni&type=$type' class='dropdown-item'>$type</a>";
						}						
					?>
				</div>
				</li>
				<li class="nav-item active px-4 underlineHover">
					<a class="nav-link" href="#"><h5 class="text-center">Kontakt</h5></a>
				</li>
				<li class="nav-item active px-4 underlineHover">
					<a class="nav-link" href="#"><h5 class="text-center">O nas</h5></a>
				</li>
			</ul>
		</div>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ">
				<li class="nav-item active px-4 text-center">
					<a class="color-black" href="#"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>
				</li>
			</ul>
		</div>
		  
		</div>
	  </nav>
</div>
</header>