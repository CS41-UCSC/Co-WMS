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
        
        
        if($res){
            header('location: http://localhost/CO-WMS/depManager');
        }
        else if(!$res){
            header('location: http://localhost/CO-WMS/login');
        }

    }


    
}