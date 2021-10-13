<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Co-WMS/style/navbar_style.css" type="text/css">
    <link rel="stylesheet" href="../Co-WMS/style/manageEmployee_style.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>

<body class="preload">

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

    <nav class="subnav">
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

    <main>
        <div class="container">


            <div class="flex-container1">
                <div class="text">All Employees</div>
                <div>
                    <form>
                        <input type="text" id="search" name="Ename" placeholder="Search Employee">
                    </form>
                </div>
                <div>
                    <form action="manageEmployeeAdd">
                        <input type="submit" value="Add Employee" class="rectan">
                    </form>
                </div>
            </div>

            <div class="flex-container">
                <!-- <div class="text">All Employees</div>  -->

                <table class="table">

                    <thead>
                        <tr>
                            <th>UserImg</th>
                            <th>Employee Id</th>
                            <th>Employee Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <!--<th>Password</th>-->
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $result = $this->users;
                        // print_r($result);
                        foreach ($result as $row) {
                            echo '<tr>';
                            echo '<td></td>';
                            echo '<td>' . $row['EmpID'] . '</td>';
                            echo '<td>' . $row['EmpName'] . '</td>';
                            echo '<td>' . $row['EmpEmail'] . '</td>';
                            echo '<td>' . $row['EmpRole'] . '</td>';
                            //echo '<td>' . $row['PASSWORD'] . '</td>';
                            echo '<td>' . $row['EmpStatus'] . '</td>';
                            echo '</tr>';
                        }

                        ?>
                    </tbody>
                </table>

            </div>
        </div>
    </main>

    <footer class="footer">
        <label for="" class="footer-data">© 2021, All rights reserved by CO - WMS <br>
            No: 23, Flower Avenue, Colombo 7, Sri Lanka.</label>
    </footer>
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