<?php

class assignTasksMember_Model extends Model{

    function __construct()
    {
        parent::__construct();
    }

    function getData($empID){

        $sql="SELECT * FROM TASK_ASSIGN";
        return $this->db->runQuery($sql);
    }
}