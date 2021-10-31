<?php


class Department_Model extends Model{

    function __construct()
    {
        parent::__construct();
    }

    function  getDepartments(){

        $sql = "SELECT DeptID, DeptName FROM dept ";
        return $this->db->runQuery($sql);
    }

}