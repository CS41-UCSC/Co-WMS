<?php

class admin extends Controller{
	
	function __construct()
	{
		parent::__construct();
		session_start();
	}
	
	function index(){
		
	}
	
	function adminHome(){
		if (isset($_POST['search_btn'])){
			if(!(empty($_POST['empId']))){
				$this->view->emp=$this->model->searchdata($_POST['empId']);
			}
			else{
				echo "<script>alert('Empty Fields');</script>";
				$this->view->emp=$this->model->getdata();
			}
		}else if (isset($_POST['search_all'])){
			$this->view->emp=$this->model->getdata();
		}else{
			$this->view->emp=$this->model->getdata();
		}
		$this->view->render('adminHome');
	}
	
	function manageAccess(){
		$this->view->emp=$this->model->searchdata($_GET['empID']);
		$this->view->res1=$this->model->getaccessdata($_GET['empID']);
		
		if (isset($_POST['submit_btn'])){
	
			if (isset($_POST["admin"])){
				$admin = true;
			}else{
				$admin = false;
			}
		
			if (isset($_POST["profile"])){
				$profile = true;
			}else{
				$profile = false;
			}
		
			if (isset($_POST["login"])){
				$login = true;
			}else{
				$login = false;
			}
		
			if (isset($_POST["member"])){
				$member = true;
			}else{
				$member = false;
			}
		
			if (isset($_POST["leader"])){
				$leader = true;
			}else{
				$leader = false;
			}
		
			if (isset($_POST["manager"])){
				$manager = true;
			}else{
				$manager = false;
			}
		
			if (isset($_POST["hr"])){
				$hr = true;
			}else{
				$hr = false;
			}
			
			if(count($this->view->res1)>0){
				$this->view->res=$this->model->updatedata($_GET['empID'],$profile,$login,$admin,$member,$leader,$manager,$hr);
				echo "<script>alert('Updated Successfully');</script>";
			}
			else{
				$this->view->res=$this->model->insertdata($_GET['empID'],$profile,$login,$admin,$member,$leader,$manager,$hr);
				echo "<script>alert('Inserted Successfully');</script>";
			}
			
			$this->view->res1=$this->model->getaccessdata($_GET['empID']);
		}
		$this->view->render('manageAccess');
	}
}

?>