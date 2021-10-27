<?php

class leave extends Controller{
	
	function __construct(){
		parent::__construct();
		session_start();
	}
	
	function index(){
		$this->view->render('empLeave');
	}
	
	function myleaveApproved(){
		$this->view->render('myleaveApproved');
	}
	
	function myleavePending(){
		$this->view->render('myleavePending');
	}
	
	function myleaveRequest(){
		if(isset($_POST['request_submit'])){
			if((!empty($_POST["start"]))&&(!empty($_POST["end"]))&&(!empty($_POST["leavetype"]))){
				$this->model->insert($_POST["start"],$_POST["end"],$_POST["leavetype"]);
			}
			else{
				echo "<script>alert('Empty Fields')</script>";
			}
		}
		$this->view->render('myleaveRequest');
	}
	
	function dptleaveApproved(){
		$this->view->render('dptleaveApproved');
	}
	
	function dptleavePending(){
		$this->view->render('dptleavePending');
	}
	
	function dptleavePendingview(){
		$this->view->render('dptleavePendingview');
	}
	
	function empLeave(){
		$this->view->render('empLeave');
	}
	
	function teamLeave(){
		$this->view->render('teamLeave');
	}
	
}
?>