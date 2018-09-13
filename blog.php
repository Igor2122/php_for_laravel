<?php 

// connetct the task class
require 'classes.php';
require 'taskClass.php';


try {
	// $pdo = new PDO('mysql:host=127.0.0.1;dbname=wordpress', 'root', 'root');
	
    $myPDO = new PDO('pgsql:host=127.0.0.1;dbname=igor', 'igor', '2122');
	
} catch (PDOException $e) {
	// die('Could not connect ');
	die($e->getMessage());
}

$statement = $myPDO->prepare('select * from tasks');

$statement->execute();

$results = $statement->fetchAll(PDO::FETCH_CLASS, 'TaskProgress');

// $results['3']->taskCompleted();