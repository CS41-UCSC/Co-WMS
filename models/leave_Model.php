<?php

class leave_Model extends Model{

    function __construct()
    {
        parent::__construct();
    }
	
	function getdata(){
		
	}
	
	function insert($start, $end, $leavetype){
		$sql="INSERT INTO empleave (StartDate,EndDate,LeaveType) VALUES ('$start','$end','$leavetype')";
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