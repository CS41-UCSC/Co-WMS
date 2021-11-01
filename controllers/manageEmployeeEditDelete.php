<?php

class manageEmployeeEditDelete extends Controller{

    public $msg;

    function __construct()
    {
        parent::__construct();
        session_start();
    }

    function index(){
        
        $this->view->users =  $this->model->getData($_GET['epmId']);
        $this->view->employee=0;
        $this->view->render('manageEmployeeEditDelete');
    }
    function editData(){
        // if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $empid = $_POST['epmId'];
            $empname= $_POST['Ename'];
            $empemail = $_POST['email'];
            $emprole = $_POST['role'];
            $empstatus=$_POST['Estatus'];
            // $password = $_POST['password'];
            // $Cpassword = $_POST['Cpassword'];

            $this->model->editEmployee($empid,$empname,$empemail,$emprole,$empstatus);

            //$this->view->users =  $this->model->getData($_POST['epmId']);
           // $this->view->employee=0;
            //$this->view->render('manageEmployeeEditDelete');
            header('location: http://localhost/CO-WMS/manageEmployeeEditDelete');

        // $this->index();
         //header('location: http://localhost/CO-WMS/manageEmployeeEditDelete');

        // }

    }

    
}