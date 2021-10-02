<?php

class deptManageTask extends Controller{

    function __construct()
    {
        parent::__construct();
        session_start();
    }

    function index(){
        
        $this->view->render('deptManageTask');

    }

}

