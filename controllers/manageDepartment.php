<?php

class manageDepartment extends Controller{

    public $msg;

    function __construct()
    {
        parent::__construct();
        session_start();
    }

    function index(){
        
        $this->view->dept =  $this->model->getData();
        $this->view->render('manageDepartment');


    }
    
}