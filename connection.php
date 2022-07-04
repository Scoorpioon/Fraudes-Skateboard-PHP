<?php

    require('database.php');
	$utf8 = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8');
	$connection = new PDO("mysql:host=$local;dbname=$nome;charset=utf8",$user,$password,$utf8);

?>