<?php

class completedTasks_Model extends Model{

    function __construct()
    {
        parent::__construct();
    }

    function getData(){

        $sql = "SELECT * FROM task";
        return $this->db->runQuery($sql);

    }
}