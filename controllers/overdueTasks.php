<?php

class overdueTasks extends Controller{

    public $msg;

    function __construct()
    {
        parent::__construct();
        session_start();
    }

    function index(){
        
        $this->view->users =  $this->model->getData();
        $this->view->render('overdueTasks');


    }
    
}