<?php

include_once('controllers/team.php');


class manageEmployeeAdd extends Controller{

    public $msg;

    function __construct()
    {
        parent::__construct();
        //session_start();
    }

    function index(){

        $team = new Team();
        $this->view->teams = $team->getTeams(); 
        $this->view->render('manageEmployeeAdd');

    }
        
    function setData(){
        
        session_start();
        
        $empid = $_POST['epmId'];
        $empname= $_POST['Ename'];
        $empemail = $_POST['email'];
        $team = $_POST['team'];
        $emprole = $_POST['role'];
        $password = $_POST['password'];
        $Cpassword = $_POST['Cpassword'];

       if($password == $Cpassword){

            $hash = password_hash($password, PASSWORD_DEFAULT);

            $res = $this->model->insertEmployee($empid,$empname,$empemail,$team,$emprole,$hash,$password);

            if($res){
                /*$to = '$empemail';
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
                }*/
                $_SESSION['add-emp-msg'] = "New record created successfully";

            }else{
                $_SESSION['add-emp-msg'] = "Fialed to add New Employee";
            }

        }
        
        else{
            $_SESSION['add-emp-msg'] = "Fialed to add New Employee password";
        }
        
        echo $_SESSION['add-emp-msg'];

        header('location: http://localhost/CO-WMS/manageEmployeeAdd');

    }
    
}