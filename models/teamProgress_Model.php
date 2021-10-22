<?php

class teamProgress_Model extends Model{
    
    function __construct()
    {
        parent::__construct();
    }

    function getMember(){

     

        $sql = "SELECT task_assign.AssignedTo, SUM(task_assign.RequiredTime) AS totaltime FROM task_assign 
        INNER JOIN task ON task_assign.TaskID = task.TaskID INNER JOIN team ON task.TeamID = team.TeamID 
        INNER JOIN dept ON team.DeptID = dept.DeptID WHERE dept.Dept_Manager = '$_SESSION[login_user]'and task_assign.TaskStatus = 'Approved' GROUP BY task_assign.AssignedTo ;" ;

        return $this->db->runQuery($sql);

     

    }

    function getTask(){

        $sql = "SELECT task.TaskName, task_assign.RequiredTime, task_assign.DueDate, task_assign.TaskStatus FROM task_assign INNER JOIN task ON task_assign.TaskID = task.TaskID ";

        return $this->db->runQuery($sql);

    }
}