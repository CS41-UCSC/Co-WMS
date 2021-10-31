<?php

include_once('models/Department_Model.php');

class Department extends Controller{


    function __construct()
    {
        parent::__construct();
    }

    function getDepartments(){

        $models = new Department_Model();
        $res = $models->getDepartments();
        return $res;

    }


}

