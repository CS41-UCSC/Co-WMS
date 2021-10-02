<?php

class myprofile extends Controller{

    function __construct()
    {
        parent::__construct();
        session_start();
    }

    function index(){
        
        $this->view->users = $this->model->getData($_SESSION['login_user']);
        $this->view->render('myprofile');

    }

    function saveform(){

        $cpass = $_POST['cpass'];
        $npass = $_POST['npass'];

        $hash = password_hash($npass, PASSWORD_DEFAULT);

        if($cpass == $npass){
            $pass = $this->model->setNewPassword($_SESSION['login_user'],$hash); 
            if($pass == 1)
                $_SESSION['pass']="yes";
            else
                $_SESSION['pass']="no";
        }
        else{
            $_SESSION['pass']="no";
        }

        $this->view->users = $this->model->getData($_SESSION['login_user']);
        header('location: http://localhost/CO-WMS/myprofile');

    }

    function savephoto(){

        $image_name = $_FILES['image']['name'];
        $tempname = $_FILES['image']['tmp_name'];
        $folder = "../Co-WMS/Asserts/".$image_name;

        $this->model->setDataPhoto($_SESSION['login_user'],$image_name);

        if (move_uploaded_file($tempname, $folder))  {
            $_SESSION['photo']="yes";
            
        }else{
            $_SESSION['photo']="no";
            
        }

        $this->view->users = $this->model->getData($_SESSION['login_user']);
        header('location: http://localhost/CO-WMS/myprofile');
        
    }

}