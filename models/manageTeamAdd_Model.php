<?php

class manageTeamAdd_Model extends Model{

    function __construct()
    {
        parent::__construct();
    }

    function insertTeam($teamName,$DeptId){

        $sql = "INSERT INTO `team`( `TeamName`, `DeptID`) VALUES ('$teamName','$DeptId') " ;


        if($this->db->query($sql) == true){
                $_SESSION['add-team'] = "yes";
        }else{
                $_SESSION['add-team'] = "no";
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