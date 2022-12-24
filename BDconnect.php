<?php
$connection = mysqli_connect('127.0.0.1','root','','test');
if($connection == false)
{
	echo 'shfhff';
	exit();
}
$result = mysqli_query($connection,"SELECT * FROM `test`");
$r1 = mysqli_fetch_assoc($result);

?>