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
        echo $_SESSION['msg'];
        
        if($res){
            if($_SESSION['emprole']== "Admin"){
                header('location: http://localhost/CO-WMS/adminHome');
            }else{
                header('location: http://localhost/CO-WMS/landingpage');
            }
            
        }

        else {
            header('location: http://localhost/CO-WMS/login');
        }

        
    }


    
}
