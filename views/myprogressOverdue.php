<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Co-WMS/style/myprogressOverdue_style.css">
    <link rel="stylesheet" href="../Co-WMS/style/navbar_style.css">
    <script language="javascript" src="../Co-WMS/views/navigation.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                                        if(date("d") == 1){
                                            $day = "st ";
                                        }elseif(date("d") == 2){
                                            $day = "nd ";
                                        }elseif(date("d") == 3){
                                            $day = "rd ";
                                        }else{
                                            $day = "th ";
                                        }

                                        echo "Today, " . date("d") . $day .date("M") . " " . date("Y") . "<br>"; 
                                        
                                    ?>
        </label>
        <div class="notification"><a href="#" ><i class="fa fa-bell fa-lg "></i></a></div>
        <span class="user-login"><?php echo $_SESSION['login_user'] ?></span>
        <img  class="img-rounded-circle" src="../Co-WMS/Asserts/<?php if($result[0]['Userimg']) {echo $result[0]['Userimg'];} else {echo 'avator.jpg';} ?>" alt="">

    

    </header>
    <nav class="nav">
        <div class="nav-links">
            <!--<div class="nav-bar">
                <button class="nav-header-button" type="button">
                    <i class="fa fa-bars fa-lg"></i>
                </button>
                <img src="../Asserts/logo.jpg" alt="" class="close-img">
            </div>-->

            <a href="#" class="nav-link nav-link-active" id="manage_access">
                <i class="fa fa-pencil-square-o fa-lg"><span>Manage Access</span></i>
            </a>
            <a href="landingpage" class="nav-link" id="dashboard">
                <i class="fa fa-tachometer fa-lg" ><span>Dashboard</span></i>
            </a>
			<a href="#" class="nav-link" id="d_progress">
                <i class="fa fa-tachometer fa-lg" ><span>Department Progress</span></i>
            </a>
            <a href="myprofile" class="nav-link" id="my_profile">
                <i class="fa fa-user fa-lg" ><span>My Profile</span></i>
            </a>
			<a href="myprogressAccepted" class="nav-link" id="my_progress">
                <i class="fa fa-user fa-lg" ><span>My Progress</span></i>
            </a>
			<a href="teamWorkProgress" class="nav-link" id="t_progress">
                <i class="fa fa-users fa-lg" ><span>Team Progress</span></i>
            </a>
			<a href="#" class="nav-link" id="emp_progress">
                <i class="fa fa-users fa-lg" ><span>Employee Progress</span></i>
            </a>
            <a href="#" class="nav-link" id="manage_task_dpt">
                <i class="fa fa-tasks fa-lg" ><span>Manage Tasks</span></i>
            </a>
			<a href="#" class="nav-link" id="manage_task_leader">
                <i class="fa fa-tasks fa-lg" ><span>Manage Tasks</span></i>
            </a>
            <a href="#" class="nav-link" id="manage_emp">
                <i class="fa fa-pencil-square-o fa-lg" ><span>Manage Employee</span></i>
            </a>
            <a href="#" class="nav-link" id="my_leave">
                <i class="fa fa-list-alt fa-lg" ><span>My Leave</span></i>
            </a>
			<a href="#" class="nav-link" id="t_leave">
                <i class="fa fa-list-alt fa-lg" ><span>Team Leave</span></i>
            </a>
			<a href="#" class="nav-link" id="d_leave">
                <i class="fa fa-list-alt fa-lg" ><span>Department Leave</span></i>
            </a>
			<a href="#" class="nav-link" id="emp_leave">
                <i class="fa fa-list-alt fa-lg" ><span>Employee Leave</span></i>
            </a>
			<a href="homepage" class="nav-link" id="logout">
                <i class="fa fa-list-alt fa-lg" ><span>Logout</span></i>
            </a>
        </div> 
        <div class="nav-overlay"></div>   
    </nav>
                            
    <nav>
    <input id="nav-toggle" type="checkbox"> 
        <ul class="links">
            <li><a href="myprogressCompleted">Completed</a></li>
            <li><a href="myprogressAccepted">In Progress</a></li>
            <li><a href="myprogressOverdue">Overdue</a></li>
            <li><a href="myprogressPending">Pending</a></li>
        </ul>
        <label for="nav-toggle" class="icon-burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </label>
    </nav>
    
    <main>
        <div class="container">

            
            <div class="flex-container">

            <div class="flex-container1">
                <div class="text">Overdue Tasks</div>
                    
            </div>
                
                 
            <table class="table">
                    <thead>
                        <tr>
                        <th>Task Id</th>
                        <th>Task Name</th>
                        <th>Assigned On</th>
                        <th>Due On</th>
                        <th>Done On</th>
                        <th>Reason</th>
                        <th>Reason Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-label="Task Id">003</td>
                            <td data-label="Task Name">Collect verify the all the customer details</td>
                            <td data-label="Assigned On">10/07/2021</td>
                            <td data-label="Due On">10/07/2021</td>
                            <td data-label="Done On">5 hrs</td>
                            <td data-label="Reason">hhh</td>
                            <td data-label="Reason Status">hhh</td>
                        </tr>

                        <tr>
                            <td data-label="Task Id">2</td>
                            <td data-label="Task Name">Kamal</td>
                            <td data-label="Assigned On">23</td>
                            <td data-label="Due On">70%</td>
                            <td data-label="Done On">Passed</td>
                            <td data-label="Reason">hhh</td>
                            <td data-label="Reason Status">hhh</td>
                        </tr>

                        <tr>
                            <td data-label="Task Id">3</td>
                            <td data-label="Task Name">Neha</td>
                            <td data-label="Assigned On">20</td>
                            <td data-label="Due On">90%</td>
                            <td data-label="Done On">Passed</td>
                            <td data-label="Reason">hhh</td>
                            <td data-label="Reason Status">hhh</td>
                        </tr>

                        <tr>
                            <td data-label="Task Id">4</td>
                            <td data-label="Task Name">Priya</td>
                            <td data-label="Assigned On">30</td>
                            <td data-label="Due On">30%</td>
                            <td data-label="Done On">Failed</td>
                            <td data-label="Reason">hhh</td>
                            <td data-label="Reason Status">hhh</td>
                        </tr>
                        <tr>
                            <td data-label="Task Id">2</td>
                            <td data-label="Task Name">Kamal</td>
                            <td data-label="Assigned On">23</td>
                            <td data-label="Due On">70%</td>
                            <td data-label="Done On">Passed</td>
                            <td data-label="Reason">hhh</td>
                            <td data-label="Reason Status">hhh</td>
                        </tr>

                        <tr>
                            <td data-label="Task Id">3</td>
                            <td data-label="Task Name">Neha</td>
                            <td data-label="Assigned On">20</td>
                            <td data-label="Due On">90%</td>
                            <td data-label="Done On">Passed</td>
                            <td data-label="Reason">hhh</td>
                            <td data-label="Reason Status">hhh</td>
                        </tr>

                        <tr>
                            <td data-label="Task Id">4</td>
                            <td data-label="Task Name">Priya</td>
                            <td data-label="Assigned On">30</td>
                            <td data-label="Due On">30%</td>
                            <td data-label="Done On">Failed</td>
                            <td data-label="Reason">hhh</td>
                            <td data-label="Reason Status">hhh</td>
                        </tr>
                        <tr>
                            <td data-label="Task Id">2</td>
                            <td data-label="Task Name">Kamal</td>
                            <td data-label="Assigned On">23</td>
                            <td data-label="Due On">70%</td>
                            <td data-label="Done On">Passed</td>
                            <td data-label="Reason">hhh</td>
                            <td data-label="Reason Status">hhh</td>
                        </tr>

                        <tr>
                            <td data-label="Task Id">3</td>
                            <td data-label="Task Name">Neha</td>
                            <td data-label="Assigned On">20</td>
                            <td data-label="Due On">90%</td>
                            <td data-label="Done On">Passed</td>
                            <td data-label="Reason">hhh</td>
                            <td data-label="Reason Status">hhh</td>
                        </tr>

                        <tr>
                            <td data-label="Task Id">4</td>
                            <td data-label="Task Name">Priya</td>
                            <td data-label="Assigned On">30</td>
                            <td data-label="Due On">30%</td>
                            <td data-label="Done On">Failed</td>
                            <td data-label="Reason">hhh</td>
                            <td data-label="Reason Status">hhh</td>
                        </tr>
                        <tr>
                            <td data-label="Task Id">2</td>
                            <td data-label="Task Name">Kamal</td>
                            <td data-label="Assigned On">23</td>
                            <td data-label="Due On">70%</td>
                            <td data-label="Done On">Passed</td>
                            <td data-label="Reason">hhh</td>
                            <td data-label="Reason Status">hhh</td>
                        </tr>

                        <tr>
                            <td data-label="Task Id">3</td>
                            <td data-label="Task Name">Neha</td>
                            <td data-label="Assigned On">20</td>
                            <td data-label="Due On">90%</td>
                            <td data-label="Done On">Passed</td>
                            <td data-label="Reason">hhh</td>
                            <td data-label="Reason Status">hhh</td>
                        </tr>

                        <tr>
                            <td data-label="Task Id">4</td>
                            <td data-label="Task Name">Priya</td>
                            <td data-label="Assigned On">30</td>
                            <td data-label="Due On">30%</td>
                            <td data-label="Done On">Failed</td>
                            <td data-label="Reason">hhh</td>
                            <td data-label="Reason Status">hhh</td>
                        </tr>
                    </tbody>
                </table>
    
            </div>
        </div>
    </main>

    <!-- <footer class="footer">
        <label for="" class="footer-data">© 2021, All rights reserved by CO - WMS <br>
                        No: 23, Flower Avenue, Colombo 7, Sri Lanka.</label>
    </footer> -->
    <script>
        document.addEventListener("DOMContentLoaded", () =>{
            const nav = document.querySelector(".nav");
            const con = document.querySelector(".container");

            document.querySelector("#btnNav").addEventListener("click" , () =>{
                nav.classList.add("nav-open");
                con.classList.add("containerN");
            });

            document.querySelector(".nav-overlay").addEventListener("click" , () =>{
                nav.classList.remove("nav-open");
                con.classList.remove("containerN");
            });
        });
    </script>
</body>
</html>