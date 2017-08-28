<?php 

	/**
	* 
	*/
	class Connnection
	{
		
		public function getConnection()
		{
			$Server_address ="localhost";
			$username="root";
			$password="";
			$database_name="ang_php";

			$conn= new mysqli($Server_address,$username,$password,$database_name) or die($conn->error._LINE_);
			return $conn;
		}
	}

	class Database
	{
		
		private $conn= null;

		public function __construct(){
			$connnection = new Connnection();
			$this->conn=$connnection->getConnection();
		}

		public function aunthenticate($username,$password){
			$password=md5($username);
			$query="select * from user where email= '".$username."'and password= '".$password."'limit 1";
			$result=$this->conn->query($query);

			if($result->num_rows > 0){
				return true;
			}
			return false;
		}
	}
 ?>