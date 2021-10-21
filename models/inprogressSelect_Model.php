<?php

class inprogressSelect_Model extends Model{

    function __construct()
    {
        parent::__construct();
    }

    function getData(){

        $sql = "SELECT * FROM task_assign";
        return $this->db->runQuery($sql);

    }
}