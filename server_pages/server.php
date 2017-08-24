<?php 

$form_data=file_get_contents("php://input");

$data=json_decode($form_data);

$what_to_do=$data->what_to_do;

echo $what_to_do=$what_to_do;
 ?>