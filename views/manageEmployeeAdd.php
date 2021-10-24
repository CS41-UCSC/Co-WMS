<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Co-WMS/style/navbar_style.css">
    <link rel="stylesheet" href="../Co-WMS/style/manageEmployeeAdd_style.css">
    <script language="javascript" src="../Co-WMS/views/navigation.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>

<body class="preload" onload='setbutton("<?php echo $_SESSION["memberaccess"] ?>","<?php echo $_SESSION["myprofile"] ?>","<?php echo $_SESSION["manageraccess"] ?>","<?php echo $_SESSION["leaderaccess"] ?>","<?php echo $_SESSION["hraccess"] ?>","<?php echo $_SESSION["adminaccess"] ?>")'>

    <?php

    if (!empty($_SESSION['add-emp-msg'])) {
        if ($_SESSION['add-emp-msg'] == "New record created successfully and Email sent") {
            echo '<script>swal("Success!", "New record created successfully and Email sent", "success")</script>';
            $_SESSION['add-emp-msg'] = null;
        } else if ($_SESSION['add-emp-msg'] == "New record created successfully and Email was not sent") {
            echo '<script>swal("Failed!", "New record created successfully and Email was not sent","error")</script>';
            $_SESSION['add-emp-msg'] = null;
        } else if ($_SESSION['add-emp-msg'] == "Fialed to add New Employee") {
            echo '<script>swal("Failed!", "Fialed to add New Employee","error")</script>';
            $_SESSION['add-emp-msg'] = null;
        }
    }


    ?>

    <header class="header">
        <button class="header-button" id="btnNav" type="button">
            <i class="fa fa-bars fa-lg"></i>
        </button>
        <img src="../Co-WMS/Asserts/logo.jpg" alt="" class="open-img">
        <label for="" class="date"> <?php
                                    $day;
                                    if (date("d") == 1) {
                                        $day = "st ";
                                    } elseif (date("d") == 2) {
                                        $day = "nd ";
                                    } elseif (date("d") == 3) {
                                        $day = "rd ";
                                    } else {
                                        $day = "th ";
                                    }

                                    echo "Today, " . date("d") . $day . date("M") . " " . date("Y") . "<br>";

                                    ?>
        </label>
        <div class="notification"><a href="#"><i class="fa fa-bell fa-lg"></i></a></div>
        <span class="user-login"><?php echo $_SESSION['login_user'] ?></span>
        <img class="img-rounded-circle" src="../Co-WMS/Asserts/avator.jpg" alt="">

    </header>

    <nav class="nav">
        <div class="nav-links">
            <a href="#" class="nav-link " id="manage_access">
                <i class="fa fa-pencil-square-o fa-lg"><span>Manage Access</span></i>
            </a>
            <a href="landingpage" class="nav-link" id="dashboard">
                <i class="fa fa-tachometer fa-lg"><span>Dashboard</span></i>
            </a>
            <a href="#" class="nav-link" id="d_progress">
                <i class="fa fa-tachometer fa-lg"><span>Department Progress</span></i>
            </a>
            <a href="myprofile" class="nav-link" id="my_profile" onclick="toggleColor(this)">
                <i class="fa fa-user fa-lg"><span>My Profile</span></i>
            </a>
            <a href="#" class="nav-link" id="my_progress">
                <i class="fa fa-user fa-lg"><span>My Progress</span></i>
            </a>
            <a href="#" class="nav-link" id="t_progress">
                <i class="fa fa-users fa-lg"><span>Team Progress</span></i>
            </a>
            <a href="employeeWorkProgress" class="nav-link" id="emp_progress">
                <i class="fa fa-users fa-lg"><span>Employee Progress</span></i>
            </a>
            <a href="#" class="nav-link" id="manage_task_dpt">
                <i class="fa fa-tasks fa-lg"><span>Manage Tasks</span></i>
            </a>
            <a href="#" class="nav-link" id="manage_task_leader">
                <i class="fa fa-tasks fa-lg"><span>Manage Tasks</span></i>
            </a>
            <a href="manageEmployee" class="nav-link" id="manage_emp">
                <i class="fa fa-pencil-square-o fa-lg"><span>Manage Employee</span></i>
            </a>
            <a href="#" class="nav-link" id="my_leave">
                <i class="fa fa-list-alt fa-lg"><span>My Leave</span></i>
            </a>
            <a href="#" class="nav-link" id="t_leave">
                <i class="fa fa-list-alt fa-lg"><span>Team Leave</span></i>
            </a>
            <a href="#" class="nav-link" id="d_leave">
                <i class="fa fa-list-alt fa-lg"><span>Department Leave</span></i>
            </a>
            <a href="#" class="nav-link" id="emp_leave">
                <i class="fa fa-list-alt fa-lg"><span>Employee Leave</span></i>
            </a>
            <a href="homepage" class="nav-link" id="logout">
                <i class="fa fa-list-alt fa-lg"><span>Logout</span></i>
            </a>
        </div>
        <div class="nav-overlay"></div>
    </nav>

    <nav>
        <input id="nav-toggle" type="checkbox">
        <ul class="links">
            <li><a href="#Employees">Employees</a></li>
            <li><a href="#Departments">Departments</a></li>
            <li><a href="#Teams">Teams</a></li>
        </ul>
        <label for="nav-toggle" class="icon-burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </label>
    </nav>

    <?php

    if (!empty($_SESSION['error-msg'])) {
        if ($_SESSION['error-msg'] == "yes") {
            echo '<script>swal("Success!", "Photo added!", "success")</script>';
            $_SESSION['error-msg'] = null;
        } else if ($_SESSION['error-msg'] == "no") {
            echo '<script>swal("Failed!", "Try Again!","error")</script>';
            $_SESSION['error-msg'] = null;
        }
    }


    ?>
    <main>

        <div class="container">

            <div class="flex-container1">
                <div>Add Employee</div>

            </div>
            <form method="POST" name="form1">
                <div class="flex-container">

                    <div>
                        <label for="epmId">Employee Id :</label><br>
                        <input type="text" id="epmId" name="epmId" placeholder="Employee Id" required><br>
                    </div>
                    <div>
                        <label for="Ename">Employee name :</label><br>
                        <input type="text" id="Ename" name="Ename" placeholder="Employee Name" required><br>
                    </div>
                    <div>
                        <label for="mail">Employee Email :</label><br>
                        <input type="email" id="email" name="email" placeholder="Email Address" required onkeyup="email_validation();"><br>
                    </div>

                    <div>
                        <label for="role" id="label-role">Employee Role :</label><br>
                        <select name="role" id="role">
                            <option value="Team_Leader">Team_Leader</option>
                            <option value="Team_Member">Team_Member</option>
                            <option value="Admin">Admin</option>
                            <option value="Dept_Manager">Dept_Manager</option>
                        </select><br>
                    </div>
                    <div>
                        <label for="password">Password :</label><br>
                        <input type="password" id="cpass" name="password" placeholder="Password" required onkeyup="validationc();"><br>
                    </div>
                    <div>
                        <label for="Cpassword">Confirm Password :</label><br>
                        <input type="password" id="npass" name="Cpassword" placeholder="Confirm Password" required onkeyup="validationn();"><br>
                    </div>

                    <!-- <div>
                        <label for="Estatus">Employee Status:</label><br>
                        <input type="radio" id="click" name="click" value="active"> Active
                        <input type="radio" id="click" name="click" value="inactive"> Inactive<br>
                    </div>-->
                    <div>
                        <a href="manageEmployee" class="back" style="color: grey;"><span><i class="fa fa-arrow-left"></i>Back</span></a>
                    </div>
                    <div>
                        <input type="submit" value="Submit" class="rectan" onclick="saveform();">
                    </div>

                </div>
            </form>
        </div>
    </main>


    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const nav = document.querySelector(".nav");
            const con = document.querySelector(".container");

            document.querySelector("#btnNav").addEventListener("click", () => {
                nav.classList.add("nav-open");
                con.classList.add("containerN");
            });

            document.querySelector(".nav-overlay").addEventListener("click", () => {
                nav.classList.remove("nav-open");
                con.classList.remove("containerN");
            });
        });
    </script>

    <script>
        res1 = null;
        res2 = null;
        res3 = null;

        function email_validation() {

            var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

            var input_email = document.getElementById("email").value;

            if (input_email.match(mailformat)) {
                document.getElementById("email").style.border = '2px solid green';
                res1 = "yes";
            } else {
                document.getElementById("email").style.border = '2px solid red';
                res1 = "no";
            }
        }

        function validationc() {

            var cpass = document.getElementById("cpass").value;

            var passw = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/;

            if (passw.test(cpass)) {
                document.getElementById("cpass").style.border = '2px solid green';
                res2 = "yes";
            } else {
                document.getElementById("cpass").style.border = '2px solid red';
                res2 = "no";
            }


        }

        function validationn() {

            var npass = document.getElementById("npass").value;

            var passw = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/;

            if (passw.test(npass)) {
                document.getElementById("npass").style.border = '2px solid green';
                res3 = "yes";
            } else {
                document.getElementById("npass").style.border = '2px solid red';
                res3 = "no";
            }
        }

        function saveform() {

            if (res1 == "yes" && res2 == "yes" && res3 == "yes") {

                document.form1.action = "manageEmployeeAdd/setData";

            } else if (res1 == "no" || res2 == "no" || res3 == "no") {

                swal("Failed!", "Try Again!", "warning");
                event.preventDefault();
            }

        }
    </script>

</body>

</html>