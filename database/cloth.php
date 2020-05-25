<?php
	include('htmlElement.php');
	
	class Cloth implements htmlElement{
		private $id;
		private $brand;
		private $name;
		private $color;
		private $preciseType;
		private $price;
		private $gender;
		private $type;
		private $img_src;
		private $class = "box col-md-4 col-12 p-0 hover";
		
		function __construct($id, $brand, $name, $price, $gender, $type, $img_src){
			$this->id = $id;
			//get more data for name string
			$arrayName = explode("-",$name);
			$this->name = $arrayName[0];
			if(count($arrayName) > 1){
				if(count($arrayName) > 2){
					$this->color = $arrayName[2];
					$this->preciseType = $arrayName[1];
				}else{
					$this->color = $arrayName[1];
				}
			}
			$this->brand = $brand;
			$this->price = $price;
			$this->gender = $gender;
			$this->type = $type;
			$this->img_src = $img_src;
				
		}
		public function getName(){
			return $this->name;
		}
		
		public function getPrice(){
			return $this->price;
		}
		
		public function getGender(){
			return $this->gender;
		}
		
		public function getTypeC(){
			return $this->type;
		}
		
		public function getImg_src(){
			return $this->img_src;
		}
		
		public function innerHTML($home){
			$outputHTML = "<div class='mb-5  $this->class'>";
			$outputHTML .= "<div class=''> ";
			$outputHTML .= "<a href='$home/clothes/?id=$this->id'>";
			$outputHTML .= "<img class='img-fluid px-3 pb-5' src='$this->img_src'/>";
			$outputHTML .= "</a>";
			$outputHTML .= "<div class='price '>";
			$outputHTML .= $this->price;
			$outputHTML .= "</div>";
			$outputHTML .= "<svg class='heart' id='$this->id' viewBox='0 0 32 29.6'>";
			$outputHTML .= "<path d='M23.6,0c-3.4,0-6.3,2.7-7.6,5.6C14.7,2.7,11.8,0,8.4,0C3.8,0,0,3.8,0,8.4c0,9.4,9.5,11.9,16,21.2c6.1-9.3,16-12.1,16-21.2C32,3.8,28.2,0,23.6,0z'/>";
			$outputHTML .= "</svg>";
			$outputHTML .= "<svg id='$this->id' class='basket' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'>";
			$outputHTML .= "<path d='M10 19.5c0 .829-.672 1.5-1.5 1.5s-1.5-.671-1.5-1.5c0-.828.672-1.5 1.5-1.5s1.5.672 1.5 1.5zm9.804-16.5l-3.431 12h-2.102l2.542-9h-5.993c.113.482.18.983.18 1.5 0 3.59-2.91 6.5-6.5 6.5-.407 0-.805-.042-1.191-.114l1.306 3.114h13.239l3.474-12h1.929l.743-2h-4.196zm-6.304 15c-.828 0-1.5.671-1.5 1.5s.672 1.5 1.5 1.5 1.5-.671 1.5-1.5c0-.828-.672-1.5-1.5-1.5zm-4.5-10.5c0 2.485-2.018 4.5-4.5 4.5-2.484 0-4.5-2.015-4.5-4.5s2.016-4.5 4.5-4.5c2.482 0 4.5 2.015 4.5 4.5zm-2-.5h-2v-2h-1v2h-2v1h2v2h1v-2h2v-1z'/>";
			$outputHTML .= "</svg>";
			$outputHTML .= "</div>";
			$outputHTML .= "</div>";
			return $outputHTML;
		}

		public function innerHTMLx($home){
			$outputHTML = "<div class='item2'>";
			$outputHTML .= "<a href='$home/clothes/?id=$this->id'>";
			$outputHTML .= "<img class='img-fluid px-3' src='$this->img_src'/>";
			$outputHTML .= "</a>";
			$outputHTML .= "</div>";
			return $outputHTML;
		}

		public function innerLabel(){
			$outputHTML = "<div class='row justify-content-center mb-5'>";
			$outputHTML .= "<div class='col-md-3 mb-5 col-sm-12 text-center'>";
			$outputHTML .= "<img class='img-fluid' src='$this->img_src'/>";
			$outputHTML .= "</div>";
			$outputHTML .= "<div class='col-md-4 col-sm-12 mb-5 text-left'>";
			$outputHTML .= "<p class='py-3'>";
			$outputHTML .= "<h2 class='font-weight-bold'>$this->brand</h2>";
			if(isset($this->preciseType)){
				$outputHTML .= "<h3>$this->name - $this->preciseType</h3>";
			}else{
				$outputHTML .= "<h3>$this->name</h3>";
			}
			$outputHTML .= "<h3 class='text-muted'> Kolor: $this->color</h3>";
			$outputHTML .= "<h3> $this->price zł </h3>";
			$outputHTML .= "<br>";
			$outputHTML .= "<br>";
			$outputHTML .= "<br>";
			$outputHTML .= "<h3> Rozmiar: </h3>";
			$outputHTML .= "<form>";
			$outputHTML .= "<select name='rozmiar' class='custom-select'>";
			$outputHTML .= "<option> XS </option>";
			$outputHTML .= "<option> S </option>";
			$outputHTML .= "<option> M </option>";
			$outputHTML .= "<option> L </option>";
			$outputHTML .= "<option> XL </option>";
			$outputHTML .= "<option> XXL </option>";
			$outputHTML .= "</select>";
			$outputHTML .= "</form>";
			$outputHTML .= "<br>";
			$outputHTML .= "<button class='btn btn-dark btn-block mt-2 btn-lg'> Do koszyka </button>";
			$outputHTML .= "</p>";
			$outputHTML .= "</div>";
			$outputHTML .= "</div>";
			return $outputHTML;
		}
		
	}

?>

