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
            $_SESSION['user_img'] = $Empimg;
            $_SESSION['photo']="yes";
        } else {
            $_SESSION['photo']="no";
        }

    }

    function setNewPassword($empID,$npass){

        $sql = ("UPDATE systemuser SET PASSWORD = '$npass' WHERE EmpID = ('$empID') ;");

        if (($this->db->query($sql)) == TRUE) {
            return true;
        } else {
            return false;
        }
    }
}