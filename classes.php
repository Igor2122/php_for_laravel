<?php 


// use a noun to name it
class Task {
	public $descipiton;
	public $completed = false;

	public function __construct($descipiton) 
		// automatically triggered on intantiation
	{
		$this->descipiton = $descipiton;
	}

	public function isComplete() 
	{
		return $this->completed;
	}

	public function taskComplete()
	{
		return $this->completed = true;
	}

	public function readTheTask () 
	{
		// why we do not have to use return here to check the task 
		$this->descipiton;
	}

}

$tasks = [
	new Task('Go to store'),
	new Task('Finish my screen cast'),
	new Task('Finish my laudry')
];	



$task = new Task('Go to store'); // instantiated a new task object
// checking for the complete bul on the task object
// var_dump($task->isComplete());
// here we are calling the method on the obj task to read the task and dumping it to the page
// var_dump($task->readTheTask());


$task->taskComplete(); // we did something and complted the task with taskComp.. method


if($task->isComplete()) { // checking the state of the task completion 
	echo $task->readTheTask();
} else {
	echo 'the task is till not completed, check back soon';
}

// why i cannot use this method on the array?
$tasks['0']->taskComplete();










