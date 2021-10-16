<?php

class myleaveRequest extends Controller{
	
	function __construct(){
		parent::__construct();
		session_start();
	}
	
	function index(){
		$this->view->render('myleaveRequest');
	}
	
	function insert(){
		$this->model->insert($_POST["start"],$_POST["end"],$_POST["leavetype"]);
		header('location: http://localhost/CO-WMS/myleaveRequest');
	}
}
?>