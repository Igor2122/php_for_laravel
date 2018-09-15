<?php 

// connetct the task class
require 'classes.php';
require 'taskClass.php';


require 'database/Connection.php';
require 'database/DBQueryBuilder.php';

$pdo = Connection::make();

$query = new DBQueryBuilder ($pdo);

$results = $query->selectAll('tasks', 'Task');

// Array_Filter 

$finishedTasks = array_filter($results, function($post) {
	// if post status is true will return; to get not true we use ! flag to map it;
	return  $post->status;
});
$unfinishedTasks = array_filter($results, function($post) {
	// if post status is true will return; to get not true we use ! flag to map it;
	return ! $post->status;
});

// var_dump($finishedTasks);
// var_dump($unfinishedTasks);

// Array_Map

$modified = array_map(function($post) {
	// return $post->status = true;
}, $results);

// sitply return the description of the posts
$postTitles = array_map(function($post) {
	return $post->description;
}, $results);

// var_dump($postTitles);
// we can use this if we do not want to expose all the data about the post so we can get ontly the status like in this case 
$modified = array_map(function($post) {
	return ['status' => $post->status];
}, $results);

// var_dump($modified);


// Array_column - this is cleaner way to return the specific postion of the data
$titles = array_column($results, 'task');
var_dump($titles);






