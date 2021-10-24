<?php

class manageEmployee_Model extends Model{

    function __construct()
    {
        parent::__construct();
    }

    function getData(){

        $sql = "SELECT * FROM systemuser";
        return $this->db->runQuery($sql);

    }
}