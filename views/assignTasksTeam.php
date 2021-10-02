<?php
    require_once('../Co-WMS/views/navbar.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Co-WMS/style/AssignTasksTeam_style.css" type="text/css">
    <link rel="stylesheet" href="../Co-WMS/style/navbar_style.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <title>Document</title>
</head>

<body class="preload">
    <!--<header class="header">
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
        <div class="notification"><a href="#" ><i class="fa fa-bell fa-lg" ></i></a></div>
        <span class="user-login"><?php echo $_SESSION['login_user'] ?></span>
        <img  class="img-rounded-circle" src="../Co-WMS/Asserts/avator.jpg" alt="">
        

    </header>  -->

    <nav class="nav">
        <div class="nav-links">

            <a href="deptManager" class="nav-link">
                <i class="fa fa-address-card-o fa-lg"><span>Department Progress</span></i>
            </a>
            <a href="myprofile" class="nav-link">
                <i class="fa fa-user fa-lg"><span> My Profile</span></i>
            </a>
            <a href="deptManageTask" class="nav-link nav-link-active">
                <i class="fa fa-list fa-lg"><span>Manage Tasks</span></i>
            </a>
            <a href="assignTasks" class="nav-link">
                <i class="fa fa-calendar-times-o fa-lg"><span>Department Leave</span></i>
            </a>
            <a href="#" class="nav-link">
                <i class="fa fa-sign-out fa-lg"><span>Logout</span></i>
            </a>
        </div> 
        <div class="nav-overlay"></div>   
    </nav>

    <main >

        <div class="item1" id="item1">
            <a href="deptManageTask" >
                <span>Add Task</span> 
            </a>
            <a href="assignTasksTeam" class="activelink">
                <span>Assign Task</span> 
            </a>
        </div>
        
        <div class="container" id="container">
            
           <div class="item2">
                
           <table id="mytable" > 
                            
                            <col id="teamid">
                            <col id="teamname">
                            <col id="leader">
                            <col id="add"> 
                            
                            <thead>
                                <tr>
                                    
                                    <th>Team ID</th>
                                    <th>Team Name</th>
                                    <th>Team Leader</th>
                                    <th>Add</th>
                                    
                                </tr >
                            </thead>
                            <tbody>
                                <tr id="1">
                                    
                                    <td class="row-data">Graphic</td>
                                    <td class="row-data">certificate</td>
                                    <td class="row-data"></td>
                                    <td><a href="assignTasksMember"><i class="fa fa-plus fa-lg"></i></a></td>

                                </tr>
                                <tr>
                                    
                                    <td class="row-data">Graphic</td>
                                    <td class="row-data">certificate</td>
                                    <td class="row-data"></td>
                                    <td><a href="assignTasksMember"><i class="fa fa-plus fa-lg"></i></a></td>

                                    
                                </tr>
                                
                            </tbody>
                            
                        </table>

           </div>

        </div>

    </main>

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