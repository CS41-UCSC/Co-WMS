<?php

class leave_Model extends Model{

    function __construct()
    {
        parent::__construct();
    }
	
	function getdata(){
		
	}
	
	function insert($start, $end, $leavetype){
		$empID = $_SESSION['login_user'];
		$status = "pending";
		$sql="INSERT INTO empleave (StartDate,EndDate,LeaveType,LStatus,EmpID) VALUES ('$start','$end','$leavetype','$status','$empID')";
		return $this->db->runQuery($sql);
		
		/*try{
            $this->db->exec($sql);
                $_SESSION['error-msg'] = "New record created successfully";
            }
        catch(PDOException $e)
        {

    	    $_SESSION['error-msg'] = $e->getMessage();
        }*/
	
	}
	
	function delete($start, $end, $leavetype){
		/*$sql="INSERT INTO empleave (StartDate,EndDate,Reason,EmpID) VALUES ('$start','$end','$leavetype','$_SESSION['login_user']')";
		return $this->db->runQuery($sql);
		echo "<script>alert('Requested Succefully')</script>";
		
		/*try{
            $this->db->exec($sql);
                $_SESSION['error-msg'] = "New record created successfully";
            }
        catch(PDOException $e)
        {

    	    $_SESSION['error-msg'] = $e->getMessage();
        }*/
	
	}
	
}
?>