<?php

class manageEmployeeEditDelete_Model extends Model{

    function __construct()
    {
        parent::__construct();
    }

    function editEmployee($empid,$empname,$empemail,$emprole,$empstatus){

        $sql = "UPDATE systemuser SET EmpName='$empname' , EmpEmail='$empemail' , EmpRole='$emprole' , EmpStatus='$empstatus' WHERE EmpID=('$empid') " ;

        // return $this->db->query($sql);


        // if($this->db->query($sql) == true){
        if($this->db->query($sql)){
                $_SESSION['edit-employee'] = "yes";
        }else{
                $_SESSION['edit-employee'] = "no";
        }


    }


    function getData($empId){

        $sql = "SELECT * FROM systemuser WHERE EmpID=('$empId')";
        return $this->db->runQuery($sql);

    }

    
}