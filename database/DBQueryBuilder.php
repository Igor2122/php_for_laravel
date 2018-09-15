<?php 



class  DBQueryBuilder
{
	protected $pdo;

	public function __construct($pdo) 
	{
		$this->pdo = $pdo;
	}

	// it will select all data from the supplied table (DB)
	public function selectAll($table ) 
	{
		$statement = $this->pdo->prepare("select * from {$table}");
		$statement->execute();
		return $statement->fetchAll(PDO::FETCH_CLASS);
	}
}

