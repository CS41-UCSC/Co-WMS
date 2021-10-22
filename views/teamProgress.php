<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Co-WMS/style/teamProgress_style.css" type="text/css">
    <link rel="stylesheet" href="../Co-WMS/style/nav_style.css" type="text/css">
    <script language="javascript" src="../Co-WMS/views/navigation.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
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
            <a href="landingpage" class="nav-link nav-link-active" id="dashboard">
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


        <div class="container" id="container">
            <form name="form1">
                <div class="item2">

                    <table id="mytable">

                        <col id="empid">
                        <col id="comtime">

                        <thead>
                            <!--<tr>
                                    
                                    <th>Team ID</th>
                                    <th>Team Name</th>
                                    <th>Team Leader</th>
                                    <th>Add</th>
                                    
                                </tr >-->
                        </thead>
                        <tbody>

                            <?php
                            $result = $this->users;

                            foreach ($result as $row) {

                                echo '<details> <summary> ' . $row['0'] . '<br> <progress id="file" value=' . $row['1'] . ' max="160">' . $row['1'] . '</progress>
                                </summary><p id="' . $row['0'] . '"><input type="button" id="btnGet" value="show more" onclick="return getTask()"><div id="results"></div></p></details>';
                            }

                            ?>

                        </tbody>

                    </table>

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

    <script type="text/javascript">

        function getTask() {

            var data = new FormData();
            
            var empid = event.target.parentNode.id;
            data.append("empid", empid);
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "teamProgress/getTask");

            xhr.onload = function() {
                
                let results = document.getElementById("results");
                
                let search = JSON.parse(this.response);
            
                results.innerHTML = "";
                if (search != null) {
                    for (let s of search) {
                        results.innerHTML += `<div>${s.TaskName}</div>`;
                    }
                }
            };

            xhr.send(data);
            return false;
        }

    </script>


</body>

</html>