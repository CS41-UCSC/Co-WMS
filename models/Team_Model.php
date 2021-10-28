<?php


class Team_Model extends Model{

    function __construct()
    {
        parent::__construct();
    }

    function  getTeams(){

        $sql = "SELECT TeamID, TeamName FROM team ";
        return $this->db->runQuery($sql);
    }

}