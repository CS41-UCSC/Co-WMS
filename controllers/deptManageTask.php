<?php

class deptManageTask extends Controller{

    function __construct()
    {
        parent::__construct();
        session_start();
    }

    function index(){
        
        $this->view->task = $this->model->getData($_SESSION['login_user']);
        
        $this->view->render('deptManageTask');

    }

    function addTask(){
        
        $this->model->insertData();

        header('location: http://localhost/CO-WMS/deptManageTask');

    }

}

