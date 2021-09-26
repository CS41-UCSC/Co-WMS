<?php

class login_Model extends Model{

    function __construct()
    {
        parent::__construct();
    }

    function getData(){
        //return $this->db->runQuery("SELECT * from users");
    }

    function setData(){

    }

    function run(){

        $user_name=$_POST['user_name'];
		$password=($_POST['password']);
		
		$res= $this->db->select("SELECT * FROM `SystemUser` WHERE `EmpID` = '".$user_name."' AND `password` = '".$password."'");
		$count = count($res);
		
		if ($count > 0) {
			
			/*Session::set('role', "user");
			Session::set('loggedIn', true);
			Session::set('user_name', $user_name);
			Session::set('password', $res[0]['password']);*/
            $_SESSION['login_user'] = $user_name;
            $_SESSION['num_login_fail']=0;
            echo $_SESSION['login_user'];
            $msg = "Hello";
            $_SESSION['msg'] = $msg ;
            ob_start();
			header('location: http://localhost/CO-WMS/depManager');
            
		} 
		   else {
			/*Session::set('loggedIn', false);*/
			//header('location: login');
            $msg = "invalid username and password";
            $_SESSION['msg'] = $msg ;
            echo $_SESSION['msg'];
            $_SESSION['num_login_fail'] ++;
            $_SESSION['last_login_time'] = time();
            ob_start();
            /*$res="no";
            return $res;*/
            header('location: http://localhost/CO-WMS/login');
            /*header("Location: " . $_SERVER["HTTP_REFERER"]);*/
		}

    }

    function login(){
        if (isset($_SESSION['num_login_fail'])) {
            if ($_SESSION['num_login_fail'] >= 2) {
                if ((time() - $_SESSION['last_login_time']) < (2 * 60)) {
                    $_SESSION['msg']="try again after 3 minutes.";
                    echo 'alert("wait")' ;
                    header('location: http://localhost/CO-WMS/login');
                    
                } else{
                    $_SESSION['num_login_fail'] =0;
                   
                }
            }else{
                $this->run();
            }
        } 

        else{
            $this->run(); 
        }   
    }

    
    
}