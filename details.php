<?php
require_once "func.php";
require_once "db.php";

$data = $_POST['fname'];

$number = DataValidation::ValidateString($data);


if($number){

		if(strlen($number) == 10 || strlen($number) == 12){$result = DataValidation::isValideINN($number);}
		if(strlen($number) == 13 || strlen($number) == 15){$result = DataValidation::isValideOGRN($number);}


	if($result){
		echo "является субъектом малого или среднего предпринимательства";
	}else{echo "НЕ является субъектом малого или среднего предпринимательства";}
}