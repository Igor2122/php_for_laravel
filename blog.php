<?php 

// connetct the task class
require 'classes.php';
require 'taskClass.php';


require 'database/Connection.php';
require 'database/DBQueryBuilder.php';

$pdo = Connection::make();

$query = new DBQueryBuilder ($pdo);

$results = $query->selectAll('tasks', 'Task');












// $statement->execute();



// $results['3']->taskCompleted();

