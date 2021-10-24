<?php

class leaderManageTask_Model extends Model{

    function __construct()
    {
        parent::__construct();
    }

    function getData(){

        $sql="SELECT T.TaskName,  T.TaskID,  TA.* FROM Task T LEFT JOIN Task_Assign TA ON TA.TaskID = T.TaskID WHERE T.TeamID IN
        ( SELECT TeamID FROM team_member WHERE EmpID = '$_SESSION[login_user]' ); ";

        return $this->db->runQuery($sql);
    }


}