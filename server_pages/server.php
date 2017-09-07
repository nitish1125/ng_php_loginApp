<?php 

require('../server_pages/database.php');

$form_data=file_get_contents("php://input");

$data=json_decode($form_data);

$what_to_do=$data->what_to_do;

if($what_to_do == "authenticate_user"){
	$db_handler = new Database();
	
	echo $db_handler->aunthenticate($data->email,$data->password);
}

 ?>