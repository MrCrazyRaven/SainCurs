<?php

$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$surname = filter_var(trim($_POST['surname']), FILTER_SANITIZE_STRING);


if(mb_strlen($login) < 5 || mb_strlen($login) > 90){
	echo "Недопустимая длина логино";
	exit();
}
if(mb_strlen($name) < 3 || mb_strlen($name) > 50){
	echo "Недопустимая длина имени";
	exit();
}
if(mb_strlen($surname) < 3 || mb_strlen($surname) > 50){
	echo "Недопустимая длина фамилии";
	exit();	
}
$connection = mysqli_connect('127.0.0.1','root','','test');
if($connection == false)
{
	echo 'shfhff';
	exit();
}
$connection->query("INSERT INTO `Person`(`Name`,`Surname`, `mail`) VALUES('$name','$surname','$login')");
header('Location: /');
?>