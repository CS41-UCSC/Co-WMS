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
        $Cpassword = $_POST['Cpassword'];
        $empstatus = "";

        if (isset($_POST['click'])) {

            $empstatus =  $_POST['click'];
        }

       if($password == $Cpassword){

            $hash = password_hash($password, PASSWORD_DEFAULT);

            $res = $this->model->insertEmployee($empid,$empname,$empemail,$emprole,$hash,$empstatus);

            if($res){
                $to = '$empemail';
                $mail_subject = 'Message from Co-WMS website';
                $email_body = "Hello {$empname},Welcome to the Co-WMS Company \n" ;
                $email_body .= "Your User Id : {$empid} \n";
                $email_body .= "Your Password : {$password} \n";
                $email_body .= "Thank you.";
                $from = 'From: cowmsofficial@gmail.com';
                
                $send_mail_result = mail($empemail, $mail_subject, $email_body, $from);

                if($send_mail_result){
                    $_SESSION['add-emp-msg'] = "New record created successfully and Email sent";
                }else{
                    $_SESSION['add-emp-msg'] = "New record created successfully and Email was not sent";
                }

            }else{
                $_SESSION['add-emp-msg'] = "Fialed to add New Employee";
            }

        }
        
        else{
            $_SESSION['add-emp-msg'] = "Fialed to add New Employee";
        }

        
        header('location: http://localhost/CO-WMS/manageEmployeeAdd');

    }
    
}