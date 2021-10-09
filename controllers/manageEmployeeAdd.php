<?php

class manageEmployeeAdd extends Controller{

    public $msg;

    function __construct()
    {
        parent::__construct();
        session_start();
    }

    function index(){
        
        $this->view->render('manageEmployeeAdd');

    }
    
}