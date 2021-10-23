<?php

class manageTeamAdd extends Controller{

    public $msg;

    function __construct()
    {
        parent::__construct();
        session_start();
    }

    function index(){
        $this->view->team=0;

        $this->view->render('manageTeamAdd');


    }

    function setData(){
        
      
        $teamName= $_POST['tname'];
        $DeptId = $_POST['dId'];

        // $hash = password_hash($password, PASSWORD_DEFAULT);

        $this->model->insertTeam($teamName,$DeptId);

        header('location: http://localhost/CO-WMS/manageTeamAdd');

    }
    
}