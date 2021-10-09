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
        
    function setData(){
        
        $empid = $_POST['epmId'];
        $empname= $_POST['Ename'];
        $empemail = $_POST['email'];
        $emprole = $_POST['role'];
        $password = $_POST['password'];
        $empstatus = $_POST['active'];

        $hash = password_hash($password, PASSWORD_DEFAULT);

        $this->model->insertEmployee($empid,$empname,$empemail,$emprole,$hash,$empstatus);

        header('location: http://localhost/CO-WMS/manageEmployeeAdd');

    }
    
}