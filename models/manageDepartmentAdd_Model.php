<?php

class manageDepartmentAdd_Model extends Model{

    function __construct()
    {
        parent::__construct();
    }
    
    function insertDepartment($dName,$dId,$dManagerId){

        $sql = "INSERT INTO `dept`( `DeptID`, `DeptName`,`Dept_Manager`) VALUES ('$dId','$dName','$dManagerId') " ;


        if($this->db->query($sql) == true){
                $_SESSION['add-department'] = "yes";
        }else{
                $_SESSION['add-department'] = "no";
        }

    
        // try{
        //     $this->db->exec($sql);
        //         $_SESSION['error-msg'] = "New record created successfully";
        //     }
        // catch(PDOException $e)
        // {

    	//     $_SESSION['error-msg'] = $e->getMessage();
        // }

    }

    
}