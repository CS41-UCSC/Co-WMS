<?php

class landingpage extends Controller{

    function __construct()
    {
        parent::__construct();
        session_start();
    }

    function index(){
        
        $this->view->data = $this->model->loadData();
        $this->view->hours = $this->model->loadHours();

        $this->view->render('landingpage');

    }

}

