<?php

class login extends Controller{

    public $msg;

    function __construct()
    {
        parent::__construct();
        session_start();
    }

    function index(){
        
        $this->view->render('login');

    }

    function run(){
        
        $res = $this->model->login();
        
        echo $res;
        
        if($res=="Team_Member"){
            header('location: http://localhost/CO-WMS/teamMember');
        }
        else if($res=="Team_Leader"){
            header('location: http://localhost/CO-WMS/teamLeader');
        }
        else if($res == "Dept_Manager"){
            header('location: http://localhost/CO-WMS/depManager');
        }
        else if(!$res){
            header('location: http://localhost/CO-WMS/login');
        }

    }


    
}