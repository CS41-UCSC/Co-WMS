<?php

class Index extends Controller{

    function __construct()
    {
        parent::__construct();
    }

    function index(){
        echo "HI, I'm the index controller";
    }
}