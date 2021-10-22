<?php

class assignTasksMember_Model extends Model{

    function __construct()
    {
        parent::__construct();
    }

    function getData($teamid){

        $sql="SELECT  T.TaskName , TA.* FROM Task_Assign TA INNER JOIN Task T ON TA.TaskID = T.TaskID WHERE T.TeamID = $teamid; ";

        return $this->db->runQuery($sql);
    }


}