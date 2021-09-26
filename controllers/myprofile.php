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

        echo $_POST['cpass'];

    }

    function savephoto(){

        $image_name = $_FILES['image']['name'];
        $tempname = $_FILES['image']['tmp_name'];
        $folder = "../Co-WMS/Asserts/".$image_name;

        $this->model->setDataPhoto($_SESSION['login_user'],$image_name);

        if (move_uploaded_file($tempname, $folder))  {
            $_SESSION['msg']="1";
            $this->view->render('myprofile');
            
        }else{
            $this->view->render('myprofile');
            
      }

        /*$this->view->render('myprofile');*/
    }

}