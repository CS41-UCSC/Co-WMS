<?php

class assignTasksTeam extends Controller{

    function __construct()
    {
        parent::__construct();
        session_start();

    }


    function index(){

        $this->view->users = $this->model->getData($_SESSION['login_user']);
        $this->view->render('assignTasksTeam');

    }
}