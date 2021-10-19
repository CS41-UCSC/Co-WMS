<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Co-WMS/style/deptManageTask_style.css" type="text/css">
    <link rel="stylesheet" href="../Co-WMS/style/navbar_style.css" type="text/css">
    <script language="javascript" src="../Co-WMS/views/navigation.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <title>Document</title>
</head>

<body class="preload" onload='setbutton("<?php echo $_SESSION["memberaccess"] ?>","<?php echo $_SESSION["myprofile"] ?>","<?php echo $_SESSION["manageraccess"] ?>","<?php echo $_SESSION["leaderaccess"] ?>","<?php echo $_SESSION["hraccess"] ?>","<?php echo $_SESSION["adminaccess"] ?>")'>
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
            <a href="landingpage" class="nav-link " id="dashboard">
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
            <a href="#" class="nav-link" id="emp_progress">
                <i class="fa fa-users fa-lg"><span>Employee Progress</span></i>
            </a>
            <a href="deptManageTask" class="nav-link nav-link-active" id="manage_task_dpt">
                <i class="fa fa-tasks fa-lg"><span>Manage Tasks</span></i>
            </a>
            <a href="#" class="nav-link" id="manage_task_leader">
                <i class="fa fa-tasks fa-lg"><span>Manage Tasks</span></i>
            </a>
            <a href="#" class="nav-link" id="manage_emp">
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
            <a href="#" class="nav-link" id="logout">
                <i class="fa fa-list-alt fa-lg"><span>Logout</span></i>
            </a>

        </div>

        <div class="nav-overlay"></div>
    </nav>

    <main id="main">

        <div class="item1" id="item1">
            <a href="deptManageTask" class="activelink">
                <span>Add Task</span>
            </a>
            <a href="assignTasksTeam" class="">
                <span>Assign Task</span>
            </a>
        </div>

        <div class="container" id="container">

            <div class="item2">

                <div class="searching">

                    <datalist id="suggestions">
                        <option>Team A</option>
                        <option>Team B</option>
                        <option>Team C</option>
                    </datalist>
                    <input autoComplete="on" list="suggestions" class="searchbar">
                    <div class="btn"><input type="submit" value="Search" class="button"></div>

                </div>

                <div class="result">


                    <table id="mytable">

                        <col id="teamid">
                        <col id="team">
                        <col id="task">
                        <col id="del">
                        <col id="edit">

                        <thead>
                            <tr>
                                <th>Team ID</th>
                                <th>Team</th>
                                <th>Tasks</th>
                                <th>Delete</th>
                                <th>Edit</th>

                            </tr>
                        </thead>
                        <tbody>
                            <!--<tr id="1">
                                    <td class="row-data">Graphic</td>
                                    <td class="row-data">Graphic</td>
                                    <td class="row-data">certificate</td>
                                    <td><button type="button" class="minus"><i class="fa fa-minus-circle fa-lg"></i></button></td>
                                    <td><button type="button" class="pen" onclick="show();"><i class="fa fa-pencil fa-lg"></i></button></td>

                                </tr>-->

                            <?php
                            $result = $this->task;
                            foreach ($result as $row) {
                                echo '<tr id= ' . $row['0'] . '>';
                                echo '<td class="row-data" >' . $row['0'] . '</td>';
                                echo '<td class="row-data" >' . $row['1'] . '</td>';
                                echo '<td class="row-data" >' . $row['2'] . '</td>';
                                echo '<td><button type="button" class="minus" onclick="show();"><i class="fa fa-minus-circle fa-lg"></i></button></td>';
                                echo '<td><button type="button" class="pen" onclick="show();"><i class="fa fa-pencil fa-lg"></i></button></td>';
                                echo '</tr>';
                            }

                            ?>

                        </tbody>

                    </table>

                </div>

            </div>

            <div class="item3">
                <h3>Add new task</h3>
                <form action="" class="data-form" id="data-form">

                    <label for="dep">Team ID </label>
                    <input type="text" name="tname" id="tname" value=""><br>
                    <label for="task">Task title</label>
                    <input type="text" name="tasktitle" value=""><br>

                    <div class="btn"><input type="submit" value="Save Changes" class="button"></div>

                </form>
            </div>

        </div>


    </main>

    <div class="popup" id="myForm">

        <form action="" class="form-popup" id="form-popup">

            <label for="dep">Team ID</label>
            <input type="text" name="tid" id="tid" value=""><br>
            <label for="dep">Team </label>
            <input type="text" name="tname" id="tteam" value=""><br>
            <label for="task">Task title</label>
            <input type="text" name="tasktitle" id="ttitle" value=""><br>

            <div class="btn"><input type="submit" value="Save Changes" class="button">
                <button type="button" class="button" onclick="closeForm()">Close</button>
            </div>

        </form>

    </div>




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
        function show() {
            

            var rowId = event.target.parentNode.parentNode.parentNode.id;
            
            //this gives id of tr whose button was clicked
            var data = document.getElementById(rowId).querySelectorAll(".row-data");

            
            /*returns array of all elements with 
            "row-data" class within the row with given id*/

            var id = data[0].innerHTML;
            var name = data[1].innerHTML;
            var title = data[2].innerHTML;

            document.getElementById("tid").value = id;
            document.getElementById("tteam").value = name;
            document.getElementById("ttitle").value = title;

            document.getElementById("myForm").style.display = "block";
            document.getElementById("container").style.filter = "grayscale(100%)";
            /*document.getElementById("item1").style.filter = "grayscale(100%)";
            document.getElementById("main").style.opacity = "0.3";*/

        }

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
            document.getElementById("container").style.filter = "none";
            /* document.getElementById("item1").style.filter = "none";
            document.getElementById("main").style.opacity = "1";*/

        }
    </script>

</body>

</html>