<?php 
/* 
	here we can access the user with the same key value pairs 
	 $greeting =  'the user is'. htmlspecialchars($_GET['user']);
*/

// ARRAY: 
$names = [
	'Igor',
	'Reem',
	'Archie'
];


$animals = [
	'cat',
	'dog',
	'goat'
];
// ASSOCIATIVE ARRAY: - is when you assign the key to each of these values

$person = [
	'age' => 32,
	'hair' => 'brown',
	'position' => 'webdeveloper'
];
// pushing new item to the []
$person['name'] = 'Igor';

// this will dump the array and stop the execution 
// die(var_dump($person));

function dd ($par) {
	die($par);
};

// Remove item from the array 
unset($person['age']);


// dd(var_dump($person));

// HOMEWORK

$todo = [
	'title' => 'IFI project',
	'due' => 'end of this mont',
	'assigned' => 'IGdevelopers',
	'completed' => false,
];


$guest = [
	'age' => 15,
];


require 'functions.php';
	// died($todo);

// check_guest_age($guest);

require 'classes.php';


try {
	$pdo = new PDO('mysql:host=127.0.0.1;dbname=wordpress', 'root', '');
	
    $myPDO = new PDO('pgsql:host=127.0.0.1;dbname=igor', 'igor', '2122');
	
} catch (PDOException $e) {
	// die('Could not connect ');
	die($e->getMessage());
}

$statement = $myPDO->prepare('select * from products');

$statement->execute();

$results = $statement->fetchAll(PDO::FETCH_OBJ);
var_dump($results[0]->body);

require 'blog.php';











// here we will reqire all the view from the index.view.php to render on the index page 
require 'view.php';