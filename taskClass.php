<?php 
class TaskProgress 
{
	public $task;
	public $status;
	public $description;

	public function taskCompleted ()
	{
		$this.$status = true;
	}
}