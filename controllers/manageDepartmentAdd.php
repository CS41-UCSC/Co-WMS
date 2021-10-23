<?php

class manageDepartmentAdd extends Controller{

    public $msg;

    function __construct()
    {
        parent::__construct();
        session_start();
    }

    function index(){
        
        $this->view->department = 0;
        
        // $this->view->users =  $this->model->getData();
        $this->view->render('manageDepartmentAdd');


    }
    function setData(){
        $dName = $_POST['dname'];
        $dId = $_POST['dId'];
        $dManagerId = $_POST['dMId'];
        $this->model->insertDepartment($dName,$dId,$dManagerId);

        header('location: http://localhost/CO-WMS/manageDepartmentAdd');

    }
    
}