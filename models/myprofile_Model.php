<?php

class myprofile_Model extends Model{

    function __construct()
    {
        parent::__construct();
    }

    function getData($empID){

        return $this->db->runQuery("SELECT * from SystemUser WHERE EmpID in ('$empID')");

    }

    function setDataPhoto($empID,$Empimg){

        $sql = ("UPDATE systemuser SET Userimg = '$Empimg' WHERE EmpID = ('$empID') ;");

        if (($this->db->query($sql)) == TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: ";
        }

    }
}