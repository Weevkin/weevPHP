<?php
	require_once("class.main.php");
	
	class DB extends Main{
			
		public $db = array();
		public $dblink;
		
		public function __construct($id = null){
				
			//Database Config variables should be located in /includes/config.php
			$db->config['HOST'] = DB_HOST;
			$db->config['USER'] = DB_USER;
			$db->config['PASS'] = DB_PASS;
			$db->config['NAME'] = DB_NAME;
			
			$this->db = $db;
			
			//Make connection to database;
			$this->dblink = $this->db_connect();
			print_r($this->dblink);
			
			//We are checking to see if a record_id has been specified for the current class linking into DB.
			if($id == null){
				//Record is blank.. Create a new object and assign a id.
			}
			else{
				//Object exists. Query that object and commit its variables to an array.
			}
		}
		
		public function db_connect(){
			$this->db->config['DB_NAME'];							
			$db = new mysqli($this->db->config['HOST'], $this->db->config['USER'], $this->db->config['PASS'], $this->db->config['NAME']);
			if($db->connect_errno > 0){
			    die('Unable to connect to database [' . $db->connect_error . ']');
			}
			else{
				echo "LOOKS LIKE WE MADE IT!";
			}
			return $db;
		}
		
	}
?>