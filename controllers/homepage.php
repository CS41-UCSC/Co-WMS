<?php

class homepage extends Controller{

    function __construct()
    {
        parent::__construct();
        session_start();
    }

    function index(){
        
        $this->view->render('homepage');

    }

    function run(){

        $this->model->run();

    }
}