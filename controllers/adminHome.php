<?php

class adminHome extends Controller{
	
	function __construct()
	{
		parent::__construct();
		session_start();
	}
	
	function index(){
		if (isset($_POST['search_btn'])){
			$this->view->emp=$this->model->searchdata($_POST['empId']);
		}else if (isset($_POST['search_all'])){
			$this->view->emp=$this->model->getdata();
		}else{
			$this->view->emp=$this->model->getdata();
		}
		$this->view->render('adminHome');
	}
	
}

?>