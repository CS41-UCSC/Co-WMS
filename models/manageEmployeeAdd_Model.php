<?php

class manageEmployeeAdd_Model extends Model{

    function __construct()
    {
        parent::__construct();
    }

    function insertEmployee($empid,$empname,$empemail,$emprole,$password,$empstatus){

        $sql = "INSERT INTO systemuser (`EmpID`, `EmpName`, `EmpEmail`, `EmpRole`, `PASSWORD`, `EmpStatus`) VALUES ('$empid','$empname','$empemail','$emprole','$password','$empstatus') " ;
    
        try{
            $this->db->exec($sql);
                $_SESSION['add-emp-msg'] = "New record created successfully";
                return true;
            }
        catch(PDOException $e)
        {

    	    $_SESSION['add-emp-msg'] = $e->getMessage();
            return false;
        }

    }

}