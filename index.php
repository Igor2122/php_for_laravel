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





// check_guest_age($guest);

// require 'classes.php';

require 'blog.php';

// require 'taskClass.php';













// here we will reqire all the view from the index.view.php to render on the index page 
require 'view.php';