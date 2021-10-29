<?php

class login extends Controller
{

    public $msg;

    function __construct()
    {
        parent::__construct();
        session_start();
    }

    function index()
    {

        $this->view->render('login');
    }

    function showpage_forgotpassword()
    {

        $this->view->render('forgotPassword');
    }

    function showpage_resetpassword()
    {

        $this->view->render('resetPassword');
    }

    function run()
    {

        $res = $this->model->login();
        echo $_SESSION['msg'];

        if ($res) {
            if ($_SESSION['emprole'] == "Admin") {
                header('location: http://localhost/CO-WMS/admin/adminHome');
            } else {
                header('location: http://localhost/CO-WMS/landingpage');
            }
        } else {
            header('location: http://localhost/CO-WMS/login');
        }
    }

    function sendOTP()
    {

        $user_name = $_POST['username'];
        $email = $_POST['email'];

        $model = new login_Model();
        $res = $model->doOTP($user_name, $email);

        if ($res) {
            echo '<script>alert("Sent Your OPT code")</script>';
            $this->view->render('resetPassword');
        } else {
            echo '<script>alert("We cannot identify You! Check Again!");</script>';
            $this->view->render('forgotPassword');
        }
    }

    function resetPassword()
    {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $otpcode = trim($_POST['otpcode']);
            $npassword = $_POST['npassword'];


            echo $_POST['otpcode'];

            $hash = password_hash($npassword, PASSWORD_DEFAULT);

            $res = $this->model->resetPassword($otpcode, $hash);

            if ($res) {
                echo '<script>alert("Success")</script>';
                header('location: http://localhost/CO-WMS/login');
            } else {
                echo '<script>alert("Failed !")</script>';
                $this->view->render('forgotPassword');
            }
        }
    }
}
