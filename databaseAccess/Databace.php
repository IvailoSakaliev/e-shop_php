<?php
	class Databace
	{
		private $databaseName = "computersdb";
		private $databaseHost = "127.0.0.1";
		private $databaseUser = "root";
		private $databasePassword = "";
		private $connection ;
		public $result;

		function __construct()
		{
			$this->connection = mysqli_connect( $this->databaseHost , $this->databaseUser, $this->databasePassword, $this->databaseName);
		}
		
		function QueryResult($query)
		{
			$this->result = mysqli_query($this->connection, $query);
			$this->CloseDatabase();
		}
		function CloseDatabase()
		{
			//mysqli_close();
		}
		
		function Add($table, $values)
		{
			$query = "INSERT INTO $table values($values)";
			$this->QueryResult($query);
		}
		
		function Delete($table , $condition)
		{
			$query = "DELETE FROM $table WHERE $condition";
			$this->QueryResult($query);
		}
		
		function GetAll($table)
		{
			
			$query = "
						SELECT * FROM `$table` ORDER BY id
					";
			$this->QueryResult($query);
			return $this->result;	
		}
		
		function GetByParameters($table, $condition)
		{
			
			$query =  "	SELECT * FROM `$table` WHERE  $condition ORDER BY id";
			$this->QueryResult($query);
			return $this->result;
		}
	}

?>
