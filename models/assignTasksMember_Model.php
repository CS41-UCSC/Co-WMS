<?php

class assignTasksMember_Model extends Model{

    function __construct()
    {
        parent::__construct();
    }

    function getData($teamid){

        $sql="SELECT T.TaskName,  T.TaskID,  TA.* FROM Task T LEFT JOIN Task_Assign TA ON TA.TaskID = T.TaskID WHERE T.TeamID = $teamid; ";

        return $this->db->runQuery($sql);
    }


}