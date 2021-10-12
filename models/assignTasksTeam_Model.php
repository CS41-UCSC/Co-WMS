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

        $sql2 = " SELECT T.TeamID, T.TeamName, L.EmpID FROM team_leader L INNER JOIN team T ON T.TeamID = L.TeamID  WHERE t.DeptID = ('$dept_ID')  ; " ;

        return $this->db->runQuery($sql2);

    }
}