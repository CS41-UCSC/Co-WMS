<?php

class teamProgress extends Controller{

    public $v=10;

    function __construct()
    {
        parent::__construct();
        session_start();

    }


    function index(){

        $this->view->users = $this->model->getMember();
        //$this->view->task = $this->model->getTask();

        $this->view->render('teamProgress');

    }

    function getTask (){

        $task = $this->model->getTask();

        echo json_encode(count($task)==0 ? null : $task);
        

    }

}