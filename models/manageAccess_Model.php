<?php

class manageAccess_Model extends Model{
	
	function __construct()
	{
		parent::__construct();
	}
	
	function getdata($empID)
	{
		$sql="SELECT * FROM systemuser WHERE EmpID = '$empID'";
		return $this->db->runQuery($sql);
	}
	
}

?>