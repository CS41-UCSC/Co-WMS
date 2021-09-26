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

        if($res=="no"){
            header('location: http://localhost/CO-WMS/login');
            /*header("Location: " . $_SERVER["HTTP_REFERER"]);*/
        }

    }


    
}