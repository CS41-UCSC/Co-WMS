<?php

class logout extends Controller{


    function __construct()
    {
        parent::__construct();

    }


    function index(){

        session_start();
        session_destroy();

        echo '<script>
        window.location.href="home";
        </script>';   

    }


}