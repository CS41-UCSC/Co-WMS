<?php

class manageEmployeeEditDelete extends Controller{

    public $msg;

    function __construct()
    {
        parent::__construct();
        session_start();
    }

    function index(){
        
        $this->view->users =  $this->model->getData($_GET['empId']);
        $this->view->employee=0;
        $this->view->render('manageEmployeeEditDelete');
    }
    function editData(){
        $empid = $_POST['epmId'];
        $empname= $_POST['Ename'];
        $empemail = $_POST['email'];
        $emprole = $_POST['role'];
        // $password = $_POST['password'];
        // $Cpassword = $_POST['Cpassword'];

        $this->model->editEmployee($empid,$empname,$empemail,$emprole);
        
        header('location: http://localhost/CO-WMS/manageEmployeeEditDelete');

    }

    
}