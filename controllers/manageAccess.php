<?php

class manageAccess extends Controller{
	
	function __construct()
	{
		parent::__construct();
		session_start();
	}
	
	function index(){
		$this->view->emp=$this->model->getdata($_GET['empID']);
		//if no.of rows == 0, insert query, else update query.
		$this->view->render('manageAccess');
	}
	
}

?>