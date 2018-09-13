<?php 

require 'classTask.php';


try {
	$myPDO = new PDO('pgsql:host=127.0.0.1;dbname=igor', 'igor', '2122');
} catch (Exception $e) {
	die($e->getMessage());
}


$posts = $myPDO->prepare('select * from tasks');

$posts->execute();

$results = $posts->fetchAll(PDO::FETCH_CLASS, 'TaskList');

