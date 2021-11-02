<?php

class teamProgress_Model extends Model{
    
    function __construct()
    {
        parent::__construct();
    }

    function getMember(){

        if($_SESSION['emprole'] == "Dept_Manager"){

            /*$sql = "SELECT task_assign.AssignedTo, SUM(task_assign.RequiredTime ) AS totaltime FROM task_assign 
            INNER JOIN task ON task_assign.TaskID = task.TaskID INNER JOIN team ON task.TeamID = team.TeamID 
            INNER JOIN dept ON team.DeptID = dept.DeptID WHERE dept.Dept_Manager = '$_SESSION[login_user]' GROUP BY task_assign.AssignedTo ;" ;*/

            $sql = "SELECT systemuser.EmpID , SUM(task_assign.RequiredTime ) AS totaltime FROM systemuser LEFT JOIN task_assign ON 
            systemuser.EmpID=task_assign.AssignedTo WHERE systemuser.EmpID = ANY ( SELECT team_member.EmpID FROM team_member INNER JOIN team ON 
            team_member.TeamID = team.TeamID INNER JOIN dept ON team.DeptID = dept.DeptID WHERE dept.Dept_Manager = '$_SESSION[login_user]' 
            OR (SELECT team_leader.EmpID FROM `team_leader` INNER JOIN `team` ON team_leader.TeamID = team.TeamID INNER JOIN `dept` 
            ON team.DeptID = dept.DeptID WHERE dept.Dept_Manager = '$_SESSION[login_user]'  AND NOT EXISTS  
            (SELECT systemuser.EmpID FROM `systemuser` WHERE systemuser.EmpRole = 'Dept_Manager' )) ) GROUP BY systemuser.EmpID ;" ;

            return $this->db->runQuery($sql);
        }

        elseif($_SESSION['emprole'] == "Team_Leader" || $_SESSION['emprole'] == "Team_Member"){

            $sql = "SELECT task_assign.AssignedTo, SUM(task_assign.RequiredTime ) AS totaltime FROM task_assign 
            INNER JOIN task ON task_assign.TaskID = task.TaskID INNER JOIN team ON task.TeamID = team.TeamID 
            INNER JOIN team_member ON team.TeamID = team_member.TeamID WHERE team_member.EmpID = '$_SESSION[login_user]'GROUP BY task_assign.AssignedTo ;" ;
    
            return $this->db->runQuery($sql);

        }
        

    }

    function getTask($eid){

        $sql = "SELECT task.TaskName, task_assign.AssignedTo, task_assign.RequiredTime, task_assign.DueDate, task_assign.TaskStatus 
        FROM task_assign INNER JOIN task ON task_assign.TaskID = task.TaskID WHERE task_assign.AssignedTo = '$eid'";

        return $this->db->runQuery($sql);

    }
}