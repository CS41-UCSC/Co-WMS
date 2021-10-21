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
	
	function getaccessdata($empID)
	{
		$sql="SELECT * FROM accesslevel WHERE EmpID = '$empID'";
		return $this->db->runQuery($sql);
	}
	
	function insertdata($empID,$MyProfile,$Login,$Admin,$Member,$Leader,$Manager,$HR)
	{
		$sql="INSERT INTO accesslevel VALUES ('$empID','$MyProfile','$Login','$Admin','$Member','$Leader','$Manager','HR')";
		
		return $this->db->runQuery($sql);
	}
	
	function updatedata($empID,$MyProfile,$Login,$Admin,$Member,$Leader,$Manager,$HR)
	{
		$sql="UPDATE accesslevel SET MyProfile='$MyProfile', LoginAccess='$Login', AdminAccess='$Admin', MemberAccess='$Member', LeaderAccess='$Leader', ManagerAccess='$Manager', HRAccess='$HR' WHERE EmpID='$empID'";
		return $this->db->runQuery($sql);
	}
	
}

?>