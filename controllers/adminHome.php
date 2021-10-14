<?php

class adminHome extends Controller{
	
	function __construct()
	{
		parent::__construct();
		session_start();
	}
	
	function index(){
		$this->view->emp=$this->model->getdata();
		$this->view->render('adminHome');
	}
	
	function search(){
		$this->view->emp=$this->model->searchdata($_POST['empId']);
		$this->view->render('adminHome');
	}
	
}

?>