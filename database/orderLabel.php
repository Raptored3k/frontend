<?php
	require_once('databaseLink.php');
	require_once('cloth.php');
	class OrderLabel{
		private $id;
		private $clothesList;
		private $total_price;
		private $paid;
		function __construct($id, $clothesList, $total_price, $paid){
			$this->id = $id;
			$this->clothesList = $clothesList;
			$this->total_price = $total_price;
			$this->paid = $paid;
			
		}
		
		public function getClothesNameList($home){
			$names = "<div>";
			$names .= "<a href='$home\order\?order=$this->id'>"; 
			$names .= "<span class='orders'>";
			foreach($this->clothesList as $name){
				$names .= explode('-',$name)[0].","; 
			}
			$names = substr($names,0,strlen($names)-1);
			$names .= "</span>";
			$names .= "<span>";
			$names .= "$this->total_price";
			$names .= "</span>";
			$names .= "<span>";
			if($this->paid == 0)	
				$names .= "- nie opłacono ";
			else
				$names .= "- opłacono ";
			$names .= "</span>";
			$names .= "</a>";
			$names .= "</div>";
			return $names;
		}	
		
		public function getClothesList(){
			return $this->clothesList;
		}
		
		public function getTotal_price(){
			return $this->total_price;
		}
		
		public function getID(){
			return $this->id;
		}
	}
?>