<?php
	require_once("class.db.php");
	
	class game extends db{
		public function __construct($id = null){	
			parent::__construct($id);
			
			//print_r($this->db->config['DB_NAME']);
			
		}
		
	} 

?>