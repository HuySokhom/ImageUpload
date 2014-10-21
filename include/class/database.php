<?php
class database
{
	protected $pdo;
	function __construct($pdo)
	{
		$this->pdo = $pdo;
	}

	function getData()
	{
		$query = $this->pdo->prepare('SELECT * FROM customers where customers_id=402');
		
		$query->execute();
		return $query->fetchAll();
	}
	
}