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
		
		function __construct(argument)
		{
			# code...
		}
	}
 ?>