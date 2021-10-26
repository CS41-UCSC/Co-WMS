<?php

class landingpage extends Controller{

    function __construct()
    {
        parent::__construct();
        session_start();
    }

    function index(){
        
        if(empty($_SESSION['login_user'])){
            echo '<script>
            alert("Session Not Start");
            window.location.href="login";
            </script>';   
        }

        $this->view->data = $this->model->loadData();
        $this->view->hours = $this->model->loadHours();

        $this->view->render('landingpage');

    }

}

