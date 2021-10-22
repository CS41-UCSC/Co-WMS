<?php

class assignTasksTeam_Model extends Model{
    
    function __construct()
    {
        parent::__construct();
    }

    function getData($empID){

        $sql1 = "SELECT DeptID FROM dept WHERE Dept_Manager = ('$empID') ;";
        $dept= $this->db->runQuery($sql1);

        $dept_ID = $dept[0]['DeptID'];

        $sql2 = "SELECT T.TeamID, T.TeamName, L.EmpID, S.EmpName FROM team T INNER JOIN team_leader L ON T.TeamID = L.TeamID INNER JOIN systemuser S ON S.EmpID = L.EmpID WHERE T.DeptID = ('$dept_ID')  ; " ;

        return $this->db->runQuery($sql2);

    }
}