<?php
//Define a class called Database.
class Database {
	
	//Set up variables for credentials which will come from constants in the config file. 
	// 'private' means they can only be accessed in this class.
	
	private $host = DB_HOST;
	private $user = DB_USER;
	private $pass = DB_PASS;
	private $dbname =DB_NAME;

    
	private $dbh;   //handler for interacting with the database.
    private $error; //can output errors with this variable.
    private $stmt;  //Use this for prepared statements.
    
    
    // Whatever is in the construct will automatically be called when you create a new database object.
    
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
	//Prevent sql injections
	
	public function bind($param, $value, $type=null) {
		if (is_null($type)) {
			switch (true) {
				case is_int ($value)  :
					$type= PDO::PARAM_INT;
					break;
				case is_bool ($value) :
					$type=PDO::PARAM_BOOL;
					break;
				case is_null ($value)  :
					$type=PDO::PARAM_NULL;
					break;
				default  : 
					$type = PDO::PARAM_STR;			
			} //switch function
			
		}   // if LOGIC
		
		$this->stmt->bindvalue ($param, $value, $type);
		
	}    // bind function	
	
	     public function execute()   {
	     	return $this->stmt->execute();
	     }
		 
		 public function resultset() {
		 	$this->execute();
			return $this->stmt->fetchAll(PDO::FETCH_OBJ);
			
		 }
	
	     public function single() {
	     	$this->execute();
			return $this->stmt->fetch(PDO::FETCH_OBJ);
			
	     }
		 
		 public function rowCount() {
		 	return $this->stmt->rowCount();
			
		 }
		 
		 public function lastInsertId() {
		 	return $this->dbh->lastInsertId();
			
		 }
	     
		 public function beginTransaction() {
		 	return $this->dbh->beginTransaction();
			
		 }
		 
		 public function endTransaction() {
		 	return $this->dbh->commit();
			
		 }
		 
		 public function cancelTransaction() {
		 	return $this->dbh->rollback();
			
		 }
		 
}     //Database Class


?>