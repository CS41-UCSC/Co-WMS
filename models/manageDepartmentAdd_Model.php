<?php

class manageDepartmentAdd_Model extends Model{

    function __construct()
    {
        parent::__construct();
    }

    function getData(){

        $sql = "SELECT * FROM dept";
        return $this->db->runQuery($sql);

    }
}