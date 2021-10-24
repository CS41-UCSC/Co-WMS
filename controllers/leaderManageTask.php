<?php

class leaderManageTask extends Controller{


    function __construct()
    {
        parent::__construct();
        session_start();
    }

    function index(){

        $this->view->users = $this->model->getData();

        $this->view->render('leaderManageTask');
        
    }
   
}