<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Co-WMS/style/navbar_style.css">
    <link rel="stylesheet" href="../Co-WMS/style/manageEmployeeAdd_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>

<body class="preload">
    <header class="header">
        <button class="header-button" id="btnNav" type="button">
            <i class="fa fa-bars fa-lg"></i>
        </button>
        <img src="logo.jpg" alt="" class="open-img">
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
        <div class="notification"><a href="#"><i class="fa fa-bell fa-lg "></i></a></div>



    </header>
    <nav class="nav">
        <div class="nav-links">
            <a href="#" class="nav-link nav-link-active">
                <i class="fa fa-user fa-lg"><span>Departmet Progress</span></i>
            </a>
            <a href="#" class="nav-link">
                <i class="fa fa-bars fa-lg"><span>My Profile</span></i>
            </a>
            <a href="#" class="nav-link">
                <i class="fa fa-bars fa-lg"><span>Manage Employee</span></i>
            </a>
            <a href="#" class="nav-link">
                <i class="fa fa-bars fa-lg"><span>Manage Tasks</span></i>
            </a>
            <a href="#" class="nav-link">
                <i class="fa fa-user fa-lg"><span>Employee Progress</span></i>
            </a>
            <a href="#" class="nav-link">
                <i class="fa fa-bars fa-lg"><span>Employee Leave</span></i>
            </a>
            <a href="#" class="nav-link">
                <i class="fa fa-bars fa-lg"><span>Department Leave</span></i>
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
            <form action="manageEmployeeAdd/setData" method="post">
                <div class="flex-container">

                    <div>
                        <label for="epmId">Employee Id :</label><br>
                        <input type="text" id="epmId" name="epmId" placeholder="Employee Id"><br>
                    </div>
                    <div>
                        <label for="Ename">Employee name :</label><br>
                        <input type="text" id="Ename" name="Ename" placeholder="Employee Name"><br>
                    </div>
                    <div>
                        <label for="mail">Employee Email :</label><br>
                        <input type="email" id="email" name="email" placeholder="Email Address"><br>
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
                        <input type="text" id="password" name="password" placeholder="Password"><br>
                    </div>
                    <div>
                        <label for="Cpassword">Confirm Password :</label><br>
                        <input type="text" id="Cpassword" name="Cpassword" placeholder="Confirm Password"><br>
                    </div>

                    <div>
                        <label for="Estatus">Employee Status:</label><br>
                        <input type="radio" name="active" value="active"> Active
                        <input type="radio" name="inactive" value="inactive"> Inactive<br>
                    </div>
                    <div>

                    </div>
                    <div>

                        <input type="submit" value="Cancel" class="rectan">

                    </div>
                    <div>

                        <input type="submit" value="Add" class="rectan">

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
</body>

</html>