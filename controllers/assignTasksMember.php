<?php

class assignTasksMember extends Controller{


    function __construct()
    {
        parent::__construct();
        session_start();
    }

    function index(){

        $this->view->users = $this->model->getData($_SESSION['teamID']);

        $this->view->render('assignTasksMember');
        
    }

    function load($teamId){

        $_SESSION['teamID'] = $teamId;

        header('location: http://localhost/CO-WMS/assignTasksMember');
        
        
    }

    
}