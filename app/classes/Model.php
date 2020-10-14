<?php

/**
 * 
 * Summary
 * Controls database tasks
 * 
 * Description
 * This class handles all jobs related to the database including CRUD operations on records.
 * 
*/

abstract class Model{
	
	/**
	 * @var string $dbh Database host information
	 */

	protected $dbh;

	/**
	 * @var sting $stmt prepared sql statement
	 */
	
	protected $stmt;

	/**
	 * Constructor function used to set database information
	 */

	public function __construct(){
		$this->dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
	}

	/**
	 * @param string $query SQL query
	 */

	public function query($query){
		
		/**
		 * Set stmt to prepared statement
		 */

		$this->stmt = $this->dbh->prepare($query);
	}

	/**
	 * Binds the prepared statements
	 */

	public function bind($param, $value, $type = null){
 		if (is_null($type)) {
  			switch (true) {
    			case is_int($value):
      				$type = PDO::PARAM_INT;
      				break;
    			case is_bool($value):
      				$type = PDO::PARAM_BOOL;
      				break;
    			case is_null($value):
      				$type = PDO::PARAM_NULL;
      				break;
    				default:
      				$type = PDO::PARAM_STR;
  			}
		}
		$this->stmt->bindValue($param, $value, $type);
	}

	/**
	 * Execites the prepared statement
	 */

	public function execute(){
		$this->stmt->execute();
	}
	
	/**
	 * @return object Returns the last inserted id
	 */

	public function lastInsertId(){
		return $this->dbh->lastInsertId();
	}

	/**
	 * Executes single record
	 */

	public function single(){
		$this->execute();
		return $this->stmt->fetch();
	}

	/**
	 * Fetches all the results from the query
	 */
	
	public function resultSet(){
		$this->execute();
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
	}
}