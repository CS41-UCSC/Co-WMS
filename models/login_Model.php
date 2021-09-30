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
		$password=$_POST['password'];
        
		$sql = ("SELECT * FROM SystemUser WHERE EmpID='$user_name' ;");
        $result = $this->db->runQuery($sql);
        
        //echo ($result[0][5]);

        if (count($result) > 0) {
            
            $hash = $result[0][5];
            
            $verify = password_verify($password, $hash); 

            if(password_verify($password, $hash)){
                //echo "hi";
                $_SESSION['login_user'] = $user_name;
                $_SESSION['password'] = $password;
                $_SESSION['num_login_fail']=0;
                //echo $_SESSION['login_user'];
                $msg = "Hello";
                $_SESSION['msg'] = $msg ;
                ob_start();
                
                return true;
                /*header('location: http://localhost/CO-WMS/depManager');*/
            }
            
        } else {

                $msg = "invalid username and password";
                $_SESSION['msg'] = $msg ;
                echo $_SESSION['msg'];
                $_SESSION['num_login_fail'] ++;
                $_SESSION['last_login_time'] = time();
                ob_start();
                
                return false;
                header('location: http://localhost/CO-WMS/login');
        }
        
		

    }

    function login(){
       /* if (isset($_SESSION['num_login_fail'])) {
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

        else{*/
            return $this->run(); 
        //}   
    }

    
    
}