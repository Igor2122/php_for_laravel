<?php 

try {
	// $pdo = new PDO('mysql:host=127.0.0.1;dbname=wordpress', 'root', 'root');
	
    $myPDO = new PDO('pgsql:host=127.0.0.1;dbname=igor', 'igor', '2122');
	
} catch (PDOException $e) {
	// die('Could not connect ');
	die($e->getMessage());
}

$statement = $myPDO->prepare('select * from products');

$statement->execute();

$results = $statement->fetchAll(PDO::FETCH_OBJ);
$firstResult = $results[0]->id;

require 'blog.php';




require 'blog-view.php';