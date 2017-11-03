<?php

class Database {
	private $host = DB_HOST;
	private $user = DB_USER;
	private $pass = DB_PASS;
	private $dbname =DB_NAME;

	private $dbh;
    private $error;
    private $stmt;

    public function __construct() {
		// Set DSN
		$dsn = 'mysql:host=' .$this->host . ';dbname=' . $this->dbname;
		// Set Options
		$options = array (
		            PDO::ATTR_PERSISTENT => true,
					PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION 
		
		);
		//Create a new PDO instance
		try {
			$this->dbh = new PDO ($dsn, $this->user, $this->pass, $options);
			
		}  //Catch any errors
		catch (PDOException $e) {
			$this->error = $e->getMessage();
		}
		
		
	}	
	
	public function query($query)  {
		$this->stmt = $this->dbh->prepare($query);
		
	}
	
	
	
	
}


?>