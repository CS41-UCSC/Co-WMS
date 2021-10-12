<?php
    require_once("../Co-WMS/views/navbar.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Co-WMS/style/AssignTasksMember_style.css" type="text/css">
    <link rel="stylesheet" href="../Co-WMS/style/navbar_style.css" type="text/css">
    <script language="javascript" src="../Co-WMS/views/navigation.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <title>Document</title>
</head>

<body class="preload" onload='setbutton("<?php echo $_SESSION["memberaccess"] ?>","<?php echo $_SESSION["myprofile"] ?>","<?php echo $_SESSION["manageraccess"] ?>","<?php echo $_SESSION["leaderaccess"] ?>","<?php echo $_SESSION["hraccess"] ?>","<?php echo $_SESSION["adminaccess"] ?>")'>
    <<header class="header">
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
        <div class="notification"><a href="#" ><i class="fa fa-bell fa-lg" ></i></a></div>
        <span class="user-login"><?php echo $_SESSION['login_user'] ?></span>
        <img  class="img-rounded-circle" src="../Co-WMS/Asserts/avator.jpg" alt="">
        

    </header>

    <nav class="nav">
        <div class="nav-links">

        <a href="#" class="nav-link " id="manage_access" >
                <i class="fa fa-pencil-square-o fa-lg"><span>Manage Access</span></i>
            </a>
            <a href="landingpage" class="nav-link nav-link-active" id="dashboard" >
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

    <main>

        <div class="item1" id="item1">
            <a href="deptManageTask">
                <span>Add Task</span>
            </a>
            <a href="assignTasksTeam" class="activelink">
                <span>Assign Task</span>
            </a>
            <a href="assignTasksTeam">
                <span>Back</span>
            </a>
        </div>

        <div class="container" id="container">

            <div class="item2">
                <!--<div class="searching">
                                   
                    <input type="text" name="search" id="search" class="search">
                    <input type="submit" value="Search" class="button">

                </div>-->
                <form method="POST">
                    <input type="month" id="bdaymonth" name="bdaymonth" class="search">
                    <input type="submit" class="button" value="Submit" onclick="getsearch();">
                </form>

            </div>

            <div class="item3">

                <div class="result" id="result" style="overflow-x:auto;">

                    <table id="mytable">

                        <col id="teamid">
                        <col id="teamname">
                        <col id="leader">
                        <col id="teamid">
                        <col id="teamname">
                        <col id="leader">
                        <col id="">
                        <col id="edit">

                        <thead>
                            <tr>

                                <th>Task ID</th>
                                <th>Assigned Time</th>
                                <th>Assigned To</th>
                                <th>Assigned By</th>
                                <th>Required Time</th>
                                <th>Due Date</th>
                                <th>Status</th>
                                <th>Edit</th>


                            </tr>
                        </thead>
                        <tbody>
                            <tr id="1">

                                <td class="row-data"></td>
                                <td class="row-data"></td>
                                <td class="row-data"></td>
                                <td class="row-data"></td>
                                <td class="row-data"></td>
                                <td class="row-data"></td>
                                <td class="row-data"></td>
                                <td><button type="button" class="pen" onclick="show();"><i class="fa fa-pencil fa-lg"></i></button></td>

                            </tr>
                            <tr>

                                <td class="row-data"></td>
                                <td class="row-data"></td>
                                <td class="row-data"></td>
                                <td class="row-data"></td>
                                <td class="row-data"></td>
                                <td class="row-data"></td>
                                <td class="row-data"></td>
                                <td><button type="button" class="pen" onclick="show();"><i class="fa fa-pencil fa-lg"></i></button></td>


                            </tr>

                        </tbody>

                    </table>
                </div>

            </div>

        </div>

    </main>

    <div class="popup" id="myForm">

        <form action="" class="form-popup" id="form-popup">

            <label for="dep">Task ID</label>
            <input type="text" name="tid" id="tname" value=""><br>
            <label for="">Task Title</label>
            <input type="text" name="tname" id="tname" value=""><br>
            <label for="task">Assigned Time</label>
            <input type="text" name="atime" value=""><br>
            <label for="task">Assigned To</label>
            <input type="text" name="to" value=""><br>
            <label for="task">Required Time</label>
            <input type="text" name="rtime" value=""><br>
            <label for="task">Due Date</label>
            <input type="text" name="ddate" value=""><br>
            <label for="">Status</label>
            <input type="text" name="status" value=""><br>

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
        function getsearch() {
            alert();
            res = document.getElementById("bdaymonth").value;
            alert(res);
        }
    </script>

    <script>
        function show() {

            var rowId = event.target.parentNode.parentNode.parentNode.id;

            //this gives id of tr whose button was clicked
            var data = document.getElementById(rowId).querySelectorAll(".row-data");


            /*returns array of all elements with 
            "row-data" class within the row with given id*/

            var name = data[0].innerHTML;
            var title = data[1].innerHTML;

            //alert("Name: " + name + "\nAge: " + title);

            //document.getElementById("tname").value = name;

            document.getElementById("myForm").style.display = "block";
            document.getElementById("container").style.filter = "grayscale(100%)";
            /*document.getElementById("item1").style.filter = "grayscale(100%)";
            document.getElementById("main").style.opacity = "0.3";*/

        }

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
            document.getElementById("container").style.filter = "none";
            /*document.getElementById("item1").style.filter = "none";
            document.getElementById("main").style.opacity = "1";*/

        }
    </script>

</body>

</html>