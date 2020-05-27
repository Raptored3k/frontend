<?php
	require_once('databaseLink.php');
	require_once('cloth.php');
	class Order{
		private $connectorDB;
		private $id;
		function __construct($user_id, $clothesList, $price){
			//create connection do db and query
			$this->connectorDB = new ConnectorDB();
			
			//add record to order table
			$this->connectorDB->query($this->getOrderQuery($user_id, $price));
			//set id from previous query
			$this->id = $this->connectorDB->insert_id;
			//add record to order_clothes table
			$this->connectorDB->query($this->getUser_clothes($user_id, $clothesList, $this->id ));
			$this->connectorDB -> close();
		}
		
		private function getUser_clothes($user_id, $clothesList, $order_id){
			$query = "INSERT INTO order_clothes(cloth_id, user_id, order_id) values ";
			foreach($clothesList as $cloth){
				$id = strval($cloth->getID());
				$query .= "($id, $user_id, $order_id), ";
			}
			//remove last white space and ',' 
			$query = substr($query, 0, -2);
			$query  .= ";";
			return $query;
		}
		
		private function getOrderQuery($user_id, $price){
			$query = "INSERT INTO orders VALUES(default , $user_id, $price, false); ";
			return $query;
		}
		
		public function getID(){
			return $this->id;
		}
	}
?>