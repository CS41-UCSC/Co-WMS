<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Co-WMS/style/AssignTasksMember_style.css" type="text/css">
    <link rel="stylesheet" href="../Co-WMS/style/nav_style.css" type="text/css">
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

        <a href="http://localhost/Co-WMS/admin/adminHome" class="nav-link" id="manage_access">
                <i class="fa fa-pencil-square-o fa-lg"><span>Manage Access</span></i>
            </a>
            <a href="http://localhost/Co-WMS/landingpage" class="nav-link " id="dashboard">
                <i class="fa fa-tachometer fa-lg" ><span>Dashboard</span></i>
            </a>
			<a href="http://localhost/Co-WMS/landingpage" class="nav-link" id="d_dashboard">
                <i class="fa fa-tachometer fa-lg" ><span>Dashboard</span></i>
            </a>
			<a href="http://localhost/Co-WMS/teamProgress" class="nav-link" id="d_progress">
                <i class="fa fa-tachometer fa-lg" ><span>Department Progress</span></i>
            </a>
            <a href="http://localhost/Co-WMS/myprofile" class="nav-link" id="my_profile">
                <i class="fa fa-user fa-lg" ><span>My Profile</span></i>
            </a>
			<a href="http://localhost/Co-WMS/myProgressAccepted" class="nav-link" id="my_progress">
                <i class="fa fa-user fa-lg" ><span>My Progress</span></i>
            </a>
			<a href="http://localhost/Co-WMS/teamProgress" class="nav-link" id="t_progress">
                <i class="fa fa-users fa-lg" ><span>Team Progress</span></i>
            </a>
			<a href="http://localhost/Co-WMS/employeeWorkProgress" class="nav-link" id="emp_progress">
                <i class="fa fa-users fa-lg" ><span>Employee Progress</span></i>
            </a>
            <a href="http://localhost/Co-WMS/deptManageTask" class="nav-link" id="manage_task_dpt">
                <i class="fa fa-tasks fa-lg" ><span>Manage Tasks</span></i>
            </a>
			<a href="http://localhost/Co-WMS/leaderManageTask" class="nav-link nav-link-active" id="manage_task_leader">
                <i class="fa fa-tasks fa-lg" ><span>Manage Tasks</span></i>
            </a>
            <a href="http://localhost/Co-WMS/manageEmployee" class="nav-link" id="manage_emp">
                <i class="fa fa-pencil-square-o fa-lg" ><span>Manage Employee</span></i>
            </a>
            <a href="http://localhost/Co-WMS/leave/myleaveApproved" class="nav-link" id="my_leave">
                <i class="fa fa-list-alt fa-lg" ><span>My Leave</span></i>
            </a>
			<a href="http://localhost/Co-WMS/leave/teamLeave" class="nav-link" id="t_leave">
                <i class="fa fa-list-alt fa-lg" ><span>Team Leave</span></i>
            </a>
			<a href="http://localhost/Co-WMS/leave/dptleaveApproved" class="nav-link" id="d_leave">
                <i class="fa fa-list-alt fa-lg" ><span>Department Leave</span></i>
            </a>
			<a href="http://localhost/Co-WMS/leave/empLeave" class="nav-link" id="emp_leave">
                <i class="fa fa-list-alt fa-lg" ><span>Employee Leave</span></i>
            </a>
			<a href="http://localhost/Co-WMS/logout" class="nav-link" id="logout">
                <i class="fa fa-list-alt fa-lg" ><span>Logout</span></i>
            </a>
        </div>

        <div class="nav-overlay"></div>
    </nav>
    <main>

        <div class="container" id="container">

            <div class="item2">
                <!--<div class="searching">
                                   
                    <input type="text" name="search" id="search" class="search">
                    <input type="submit" value="Search" class="button">

                </div>-->
                <form>
                    <input type="date" id="date" name="bdaymonth" class="search">
                    <input type="submit" class="button" value="Submit" onclick="getsearch();">
                </form>

            </div>

            <div class="item3">

                <div class="result" id="result" style="overflow-x:auto;">

                    <table id="mytable">

                        <col id="taskid">
                        <col id="taskname">
                        <col id="asstime">
                        <col id="assto">
                        <col id="retime">
                        <col id="duedate">
                        <col id="status">
                        <col id="view">
                        <col id="edit">

                        <thead>
                            <tr>
                                <th>Task ID</th>
                                <th>Task Name</th>
                                <th>Assigned Time</th>
                                <th>Assigned To</th>
                                <th>Required Time</th>
                                <th>Due Date</th>
                                <th>Status</th>
                                <th>view</th>
                                <th>Edit</th>


                            </tr>
                        </thead>

                        <tbody>

                            <?php

                            $result = $this->users;

                            if ($result != NULL) {


                                foreach ($result as $row) {
                                    echo '<tr id= ' . $row['1'] . '>';
                                    echo '<td class="row-data">' . $row['1'] . '</td>';
                                    echo '<td class="row-data">' . $row['0'] . '</td>';
                                    echo '<td class="row-data">' . $row['3'] . '</td>';
                                    echo '<td class="row-data">' . $row['4'] . '</td>';
                                    echo '<td class="row-data" style="display:none" >' . $row['5'] . '</td>';
                                    echo '<td class="row-data">' . $row['6'] . '</td>';
                                    echo '<td class="row-data">' . $row['7'] . '</td>';
                                    echo '<td class="row-data" id=' . $row['8'] . ' >' . $row['8'] . '</td>';
                                    echo '<td class="row-data" style="display:none" >' . $row['9'] . '</td>';
                                    echo '<td class="row-data" style="display:none" >' . $row['10'] . '</td>';
                                    echo '<td class="row-data" style="display:none" >' . $row['11'] . '</td>';
                                    echo '<td><button type="button" class="pen" onclick="viewshow();"><i class="fa fa-eye fa-lg"></i></button></td>';
                                    echo '<td><button type="button" class="pen" onclick="show();"><i class="fa fa-pencil fa-lg"></i></button></td>';
                                    echo '</tr>';
                                }
                            }
                            ?>

                        </tbody>

                        <style>

                        </style>

                    </table>
                </div>

            </div>

        </div>

    </main>

    <div class="popup" id="myForm">

        <form action="" class="form-popup" id="form-popup">

            <label for="dep" id="ltid">Task ID</label>
            <input type="text" name="tid" id="tid" value="" readonly><br>
            <label for="" id="ltname">Task Name</label>
            <input type="text" name="tname" id="tname" value=""><br>
            <label for="task" id="latime">Assigned Time</label>
            <input type="text" name="atime" id="atime" value="" readonly><br>
            <label for="task" id="lato">Assigned To</label>
            <input type="text" name="ato" id="ato" value=""><br>
            <label for="task" id="laby">Assigned By</label>
            <input type="text" name="aby" id="aby" value=""><br>
            <label for="task" id="lrtime">Required Time</label>
            <input type="text" name="rtime" id="rtime" value=""><br>
            <label for="task" id="lddate">Due Date</label>
            <input type="text" name="ddate" id="ddate" value=""><br>
            <label for="" name="lstts">Status</label>
            <input type="text" name="stts" id="stts" value=""><br>
            <progress id="file" value="32" max="100"></progress><br>
            <label for="" id="lacdate">Accepted Date</label>
            <input type="text" name="acdate" id="acdate" value="" readonly><br>
            <label for="" id="lcdate">Completed Date</label>
            <input type="text" name="cdate" id="cdate" value="" readonly><br>
            <label for="" id="lapdate">Approved Date</label>
            <input type="text" name="apdate" id="apdate" value="" readonly><br>

            <div class="btn">
                <input type="submit" value="Save Changes" class="button">
                <button type="button" class="button" onclick="closeForm()">Close</button>
            </div>

        </form>

    </div>

    <div class="viewdata" id="viewForm">
        <div class="data">
            <h3>Sub Task Progress</h3>
            <progress id="file" value="32" max="100"></progress><br>
            <div id="details"></div>
            <div class="btn">
                <button type="button" class="button" onclick="closeviewForm()">Close</button>
            </div>
        </div>

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


        }
    </script>


    <script>
        function viewshow() {

            var rowId = event.target.parentNode.parentNode.parentNode.id;

            var data = document.getElementById(rowId).querySelectorAll(".row-data");

            var acdate = data[8].innerHTML;
            var cdate = data[9].innerHTML;
            var apdate = data[10].innerHTML;

            document.getElementById("details").innerHTML = "";

            document.getElementById("details").innerHTML += '<br> Accepted Date<br>' + acdate + '<br>';
            document.getElementById("details").innerHTML += '<br> Completed Date<br>' + cdate + '<br>';
            document.getElementById("details").innerHTML += '<br> Approved Date<br>' + apdate + '<br>';
            document.getElementById("details").innerHTML += '<br>';

            document.getElementById("viewForm").style.display = "block";
            document.getElementById("container").style.filter = "grayscale(100%)";

        }

        function show() {

            var rowId = event.target.parentNode.parentNode.parentNode.id;

            //this gives id of tr whose button was clicked
            var data = document.getElementById(rowId).querySelectorAll(".row-data");

            /*returns array of all elements with 
            "row-data" class within the row with given id*/

            var id = data[0].innerHTML;
            var name = data[1].innerHTML;
            var atime = data[2].innerHTML;
            var ato = data[3].innerHTML;
            var aby = data[4].innerHTML;
            var rtime = data[5].innerHTML;
            var ddate = data[6].innerHTML;
            var status = data[7].innerHTML;
            var acdate = data[8].innerHTML;
            var cdate = data[9].innerHTML;
            var apdate = data[10].innerHTML;

            document.getElementById("tid").value = id;
            document.getElementById("tname").value = name;
            document.getElementById("atime").value = atime;
            document.getElementById("ato").value = ato;
            document.getElementById("aby").value = aby
            document.getElementById("rtime").value = rtime;
            document.getElementById("ddate").value = ddate;
            document.getElementById("stts").value = status;
            document.getElementById("file").style.display = "none";
            document.getElementById("acdate").value = acdate;
            document.getElementById("cdate").value = cdate;
            document.getElementById("apdate").value = apdate;

            document.getElementById("myForm").style.display = "block";
            document.getElementById("container").style.filter = "grayscale(100%)";

        }

        function closeviewForm() {

            document.getElementById("viewForm").style.display = "none";
            document.getElementById("container").style.filter = "none";

        }

        function closeForm() {

            document.getElementById("myForm").style.display = "none";
            document.getElementById("container").style.filter = "none";

        }
    </script>

</body>

</html>