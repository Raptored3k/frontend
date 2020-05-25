<!-- home -->
<!doctype html>
<html lang="en">
	<?php
		session_start();
		$directory = $_SERVER['DOCUMENT_ROOT'];
		$home = "http://".$_SERVER['SERVER_NAME'];
		$reqestUrl = $uri_parts = explode('?', $_SERVER['REQUEST_URI'], 2);
		//set '/' when in url didn't occur param or precision url
		if(!isset($reqestUrl[0])) $reqestUrl[0] = "/";
		if(!isset($reqestUrl[1])) $reqestUrl[1] = "/";
		else
			$reqestUrl[1] = '?'.$reqestUrl[1];//add ? at start of string to create correct param url
		include($directory."/login.php");
	?> 
  <head>
    <title>Cenere</title>
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
            <form role="form" method="post" action="index.php">
              <div class="form-group fadeIn third">
                <input name="email" type="text" class="form-control border-secondary"  placeholder="Enter email">
              </div>
              <div class="form-group fadeIn fourth">
                <input name="password" type="password" class="form-control border-secondary"  placeholder="Enter password">
              </div>
              <div class="checkbox fadeIn fifth">
                <label><input type="checkbox" value="" checked>Remember me</label>
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
    <header class="">
        <div class="container-fluid">
            <div class="row py-2">
               <div class="col-md-3 col-12 text-center">
                <a href=""><img <?php echo "src='".$home."/elements/logo.png'"; ?>  alt="" class="img-fluid"></a>
               </div>
               <div class="col-md-7 col-8 text-center pt-3 ">
                    <form class="form-inline p-0 my-lg-0 pl-5">
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
      <div class="container-fluid p-0 border mb-4">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active px-4 underlineHover">
                  <a class="nav-link" <?php echo "href='".$home."'"; ?>><h5>Home</h5> </a>
                </li>
                <li class="nav-item active px-4 underlineHover">
                  <a class="nav-link" <?php echo "href='".$home."/filter/?gender=kobiety'"; ?>><h5>Kobiety</h5></a>
                </li>
                <li class="nav-item active px-4 underlineHover">
					 <a class="nav-link"<?php echo "href='".$home."/filter/?gender=mezczyzni'"; ?>><h5>Mężczyzni</h5> </a>
                </li>
                <li class="nav-item active px-4 underlineHover">
                    <a class="nav-link" href="#"><h5>Kontakt</h5></a>
                </li>
                <li class="nav-item active px-4 underlineHover">
                    <a class="nav-link" href="#"><h5>O nas</h5></a>
                </li>
              </ul>
              
            </div>
          </nav>
    </div>
    </header>

    <main>
      <div class="container-fluid p-0 mb-5">
        <div class="site-slider m-0">
          <div class="slider-items1">
            <div class="item1">
              <img src="http://cdn.aboutstatic.com/file/e440be51859e7fc5cb0feb9aa7bd2ff3?width=2000&height=1000&quality=90" class ="img-fluid" alt="">
            </div>
            <div class="item1">
              <img src="http://cdn.aboutstatic.com/file/57239d276d8b139160b7f68f80c52cdf?width=2000&height=1000&quality=90" class ="img-fluid"alt="">
            </div>
            <div class="item1">
              <img src="http://cdn.aboutstatic.com/file/406a3fc570bc881ea40c095840b6666f?width=2000&height=1000&quality=90" class ="img-fluid" alt="">
            </div>
            <div class="item1">
              <img src="http://cdn.aboutstatic.com/file/f12aa95bd56d16e568f30096fc964bdc?width=2000&height=1000&quality=90" class ="img-fluid" alt="">
            </div>
          </div>
          <div class="btn-slider1">
            <span class="left1 arrow1 position"><i class="fas fa-angle-left"></i></span>
            <span class="right1 arrow1 position"><i class="fas fa-angle-right"></i></span>
          </div>
        </div>
      </div>
      
      <div class="container-fluid p-0 ">
        <div class="col-12 divek pl-5 pt-4 border-top" style="font-size:4vw" >Może Ci się spodobać...</div>
        <div class="site-slider m-0">
          <div class="slider-items">
            <div class="item">
              <img src="https://mosaic03.ztat.net/vgs/media/catalog-lg/TO/12/1D/0F/FA/11/TO121D0FF-A11@4.jpg" class ="img-fluid" alt="">
            </div>
            <div class="item">
              <img src="https://mosaic04.ztat.net/vgs/media/catalog-lg/GU/12/1D/0T/3Q/11/GU121D0T3-Q11@8.jpg" class ="img-fluid"alt="">
            </div>
            <div class="item">
              <img src="https://mosaic03.ztat.net/vgs/media/catalog-lg/TO/12/1D/0D/NC/11/TO121D0DN-C11@4.jpg" class ="img-fluid" alt="">
            </div>
            <div class="item">
              <img src="https://mosaic03.ztat.net/vgs/media/catalog-lg/TO/12/1D/0F/FA/11/TO121D0FF-A11@4.jpg" class ="img-fluid" alt="">
            </div>
            <div class="item">
              <img src="https://mosaic04.ztat.net/vgs/media/catalog-lg/GU/12/1D/0T/3Q/11/GU121D0T3-Q11@8.jpg" class ="img-fluid" alt="">
            </div>
            <div class="item">
              <img src="https://mosaic03.ztat.net/vgs/media/catalog-lg/TO/12/1D/0D/NC/11/TO121D0DN-C11@4.jpg" class ="img-fluid" alt="">
            </div>
            <div class="item">
              <img src="https://mosaic03.ztat.net/vgs/media/catalog-lg/TO/12/1D/0F/FA/11/TO121D0FF-A11@4.jpg" class ="img-fluid" alt="">
            </div>
            <div class="item">
              <img src="https://mosaic04.ztat.net/vgs/media/catalog-lg/GU/12/1D/0T/3Q/11/GU121D0T3-Q11@8.jpg" class ="img-fluid" alt="">
            </div>
            <div class="item">
              <img src="https://mosaic03.ztat.net/vgs/media/catalog-lg/TO/12/1D/0D/NC/11/TO121D0DN-C11@4.jpg" class ="img-fluid" alt="">
            </div>
          </div>
          <div class="btn-slider">
            <span class="left arrow position"><i class="fas fa-angle-left"></i></span>
            <span class="right arrow position"><i class="fas fa-angle-right"></i></span>
          </div>
        </div>
      </div>
      
    </main>

    <footer>
      <div class="container-fluid">
        <div class="row border-top pt-2">
          <div class="col-md-6 p-0"><span class="p-2 w-60" style="font-size:3vw ;">Zapisz się do naszego newslettera: </span></div>
          <div class="col-md-6 p-0 my-2">
            <form class="form-inline p-0 my-lg-0 dolewej">
              <input class="form-control border-secondary form-rounded form-width" type="email" placeholder="Wpisz swój adres email..." aria-label="Email">
              <button class="btn btn-outline-secondary ml-1 form-rounded" type="button"><i class="fas fa-paper-plane"></i></button> <!-- DOROBIC JSA DO TEGO -->
            </form>
          </div>
        </div>
      </div>
    </footer>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/712d4f9a10.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="script.js"></script>
	<!-- navi script -->
	<script <?php echo "src='".$home."/elements/script.js'"?>></script>
</body>
</html>