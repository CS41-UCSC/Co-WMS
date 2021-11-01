<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Co-WMS/style/employeeWorkProgress_style.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="../Co-WMS/style/navbar_style.css?<?php echo time(); ?>">
    <script language="javascript" src="../Co-WMS/views/navigation.js?<?php echo time(); ?>"></script>
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
        <img class="img-rounded-circle" src="../Co-WMS/Asserts/<?php if ($_SESSION['user_img']) {echo $_SESSION['user_img'];} else {echo 'avator.jpg';} ?>" alt="">

    

    </header>
    <nav class="nav">
        <div class="nav-links">
            <!--<div class="nav-bar">
                <button class="nav-header-button" type="button">
                    <i class="fa fa-bars fa-lg"></i>
                </button>
                <img src="../Asserts/logo.jpg" alt="" class="close-img">
            </div>-->

            <a href="http://localhost/Co-WMS/admin/adminHome" class="nav-link" id="manage_access">
                <i class="fa fa-pencil-square-o fa-lg"><span>Manage Access</span></i>
            </a>
            <a href="http://localhost/Co-WMS/landingpage" class="nav-link" id="dashboard">
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
			<a href="http://localhost/Co-WMS/employeeWorkProgress" class="nav-link nav-link-active" id="emp_progress">
                <i class="fa fa-users fa-lg" ><span>Employee Progress</span></i>
            </a>
            <a href="http://localhost/Co-WMS/deptManageTask" class="nav-link" id="manage_task_dpt">
                <i class="fa fa-tasks fa-lg" ><span>Manage Tasks</span></i>
            </a>
			<a href="http://localhost/Co-WMS/leaderManageTask" class="nav-link" id="manage_task_leader">
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
        <div class="container">
            <div class="flex-container1">
                <div class="text">All Employees</div>
                <div>
                    <form>
                        <input type="text" id="search" name="Ename" placeholder="Search Employee" onkeyup="search_employee();">
                    </form>
                </div>
            </div>
            <div class="flex-container">
                <!-- <div class="text">All Employees</div>  -->
                
                <table class="table" id="mytable">
                    <thead>
                        <tr>
                        <th>Profile</th>
                        <th>Employee</th>
                        <th>Employee Id</th>
                        <th>Team Id</th>
                        <th>View</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-label="Profile"><a href="#"><i class="fa fa-user fa-2x" style="color:gray;" aria-hidden="true"></i></a></td>
                            <td data-label="Employee">Kamal Silva</td>
                            <td data-label="Employee Id">AC-TM-004</td>
                            <td data-label="Team">1</td>
                            <td data-label="View"><a href="http://localhost/Co-WMS/progressReport"><i class="fa fa-eye fa-2x" style="color:gray;" aria-hidden="true"></i></a></td>
                        </tr>

                        
                        <tr>
                            <td data-label="Profile"><a href="#"><i class="fa fa-user fa-2x" style="color:gray;" aria-hidden="true"></i></a></td>
                            <td data-label="Employee">Visal Rajapaksha</td>
                            <td data-label="Employee Id">AC-TM-007</td>
                            <td data-label="Team">2</td>
                            <td data-label="View"><a href="http://localhost/Co-WMS/progressReport"><i class="fa fa-eye fa-2x" style="color:gray;" aria-hidden="true"></i></a></td>
                        </tr>

                       
                        <tr>
                            <td data-label="Profile"><a href="#"><i class="fa fa-user fa-2x" style="color:gray;" aria-hidden="true"></i></a></td>
                            <td data-label="Employee">T.R.A. Kaluvitharana</td>
                            <td data-label="Employee Id">AC-DM-002</td>
                            <td data-label="Team">4</td>
                            <td data-label="View"><a href="http://localhost/Co-WMS/progressReport"><i class="fa fa-eye fa-2x" style="color:gray;" aria-hidden="true"></i></a></td>
                        </tr>

                        
        
                        <tr>
                            <td data-label="Profile"><a href="#"><i class="fa fa-user fa-2x" style="color:gray;" aria-hidden="true"></i></a></td>
                            <td data-label="Employee">A.R.A. Silva</td>
                            <td data-label="Employee Id">AC-TL-001</td>
                            <td data-label="Team">12</td>
                            <td data-label="View"><a href="http://localhost/Co-WMS/progressReport"><i class="fa fa-eye fa-2x" style="color:gray;" aria-hidden="true"></i></a></td>
                        </tr>

                        <tr>
                            <td data-label="Profile"><a href="#"><i class="fa fa-user fa-2x" style="color:gray;" aria-hidden="true"></i></a></td>
                            <td data-label="Employee">S.S. Munasinha</td>
                            <td data-label="Employee Id">AC-DM-002</td>
                            <td data-label="Team">9</td>
                            <td data-label="View"><a href="http://localhost/Co-WMS/progressReport"><i class="fa fa-eye fa-2x" style="color:gray;" aria-hidden="true"></i></a></td>
                        </tr>

                        </tr>
                        <tr>
                            <td data-label="Profile"><a href="#"><i class="fa fa-user fa-2x" style="color:gray;" aria-hidden="true"></i></a></td>
                            <td data-label="Employee">Binod Karunarathna</td>
                            <td data-label="Employee Id">AC-DM-002</td>
                            <td data-label="Team">5</td>
                            <td data-label="View"><a href="http://localhost/Co-WMS/progressReport"><i class="fa fa-eye fa-2x" style="color:gray;" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr>
                            <td data-label="Profile"><a href="#"><i class="fa fa-user fa-2x" style="color:gray;" aria-hidden="true"></i></a></td>
                            <td data-label="Employee">S.M. Abewardhana</td>
                            <td data-label="Employee Id">AC-TM-007</td>
                            <td data-label="Team">3</td>
                            <td data-label="View"><a href="http://localhost/Co-WMS/progressReport"><i class="fa fa-eye fa-2x" style="color:gray;" aria-hidden="true"></i></a></td>
                        </tr>

                        <tr>
                            <td data-label="Profile"><a href="#"><i class="fa fa-user fa-2x" style="color:gray;" aria-hidden="true"></i></a></td>
                            <td data-label="Employee">A.A Fernando</td>
                            <td data-label="Employee Id">AC-TM-010</td>
                            <td data-label="Team">5</td>
                            <td data-label="View"><a href="http://localhost/Co-WMS/progressReport"><i class="fa fa-eye fa-2x" style="color:gray;" aria-hidden="true"></i></a></td>
                        </tr>

                        </tr>
                        <tr>
                            <td data-label="Profile"><a href="#"><i class="fa fa-user fa-2x" style="color:gray;" aria-hidden="true"></i></a></td>
                            <td data-label="Employee">S.S. Vihansa</td>
                            <td data-label="Employee Id">AC-TM-007</td>
                            <td data-label="Team">5</td>
                            <td data-label="View"><a href="http://localhost/Co-WMS/progressReport"><i class="fa fa-eye fa-2x" style="color:gray;" aria-hidden="true"></i></a></td>
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

    <script>
            function search_employee() {

                input = document.getElementById("search");
                filter = input.value.toUpperCase();
                table = document.getElementById("mytable");

                tr = table.getElementsByTagName("tr");

                for (i = 0; i < tr.length; i++) {

                    td = tr[i].getElementsByTagName("td")[1];

                    if (td) {
                        txtValue = td.textContent || td.innerText;
                        
                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                            tr[i].style.display = "";
                        } else {
                            tr[i].style.display = "none";
                        }
                    }
                }
            }
        </script>
</body>
</html>