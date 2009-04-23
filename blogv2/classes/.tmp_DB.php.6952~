<?php
class DB
{
	private $dbName;
	private $host;
	private $user;
	private $password;
	
	private $connection;
	
	public function __construct($dbName = "blog", $host = "localhost", $user = "root", $pass = "")
	{
		$this->dbName = $dbName;
		$this->host = $host;
		$this->user = $user;
		$this->password = $pass;
		
	}
	
	/*
	 * connects to the db and selects db
	 * returns the connection
	 */
	public function connect()
	{
		$con = mysql_connect($this->host, $this->user, $this->password);
		mysql_select_db($this->dbName, $con);
		return $con;
	}
	
	/*
	 * Closes the connection and frees the latest result
	 */
	public function cc($con, $ref = null)
	{
		if($ref)
			mysql_free_result($ref);
		mysql_close($con);
	}
	
	public function query($sql)
	{
		return mysql_query($sql);
	}
	
}

?>