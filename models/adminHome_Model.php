<?php

class adminHome_Model extends Model{
	
	function __construct()
	{
		parent::__construct();
	}
	
	function getdata()
	{
		$sql='SELECT * FROM systemuser';
		return $this->db->runQuery($sql);
	}
	
	function searchdata($empid)
	{
		$sql="SELECT * FROM systemuser WHERE EmpID='$empid'";
		return $this->db->runQuery($sql);
		
	}
}

?>