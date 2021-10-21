<?php

class teamProgress extends Controller{

    function __construct()
    {
        parent::__construct();
        session_start();

    }


    function index(){

        $this->view->users = $this->model->getMember();
        $this->view->task = $this->model->getTask();

        $this->view->render('teamProgress');

    }

}