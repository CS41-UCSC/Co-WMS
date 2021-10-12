<?php

class deptManageTask_Model extends Model{

    function __construct()
    {
        parent::__construct();

    }

    function getData($empId){

        //$sql = "SELECT tk.TeamID, tm.TeamName, tk.TaskName FROM Task tk, Team tm  WHERE tk.TeamID  IN ( SELECT teamID FROM Team WHERE DeptID IN ( SELECT DeptID FROM dept_manager WHERE EmpID =  '$empId' ) ) ; ";

        $sql1 = "SELECT DeptID FROM dept WHERE Dept_Manager = ('$empId') ;";
        $dept= $this->db->runQuery($sql1);

        $dept_ID = $dept[0]['DeptID'];

        $sql = "SELECT tk.TeamID, tm.TeamName, tk.TaskName FROM Team tm INNER JOIN Task tk ON tk.TeamID = tm.TeamID  WHERE tm.DeptID = ('$dept_ID')  ; " ;

        return $this->db->runQuery($sql);

    }
}