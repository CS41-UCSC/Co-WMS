<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Co-WMS/completedTask_style.css">
    <link rel="stylesheet" href="../Co-WMS/nav_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <script language="javascript" src="navigation.js"> -->
    <title>Document</title>
</head>

<body class="preload">
    <header class="header">
        <button class="header-button" id="btnNav" type="button">
            <i class="fa fa-bars fa-lg"></i>
        </button>
        <img src="logo.jpeg" alt="" class="open-img">
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
        <!-- <span class="user-login"><?php echo $_SESSION['login_user'] ?></span> -->
        <img class="img-rounded-circle" src="../Co-WMS/Asserts/avator.jpg" alt="">

    

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
            <a href="#" class="nav-link" id="dashboard">
                <i class="fa fa-tachometer fa-lg" ><span>Dashboard</span></i>
            </a>
			<a href="#" class="nav-link" id="d_progress">
                <i class="fa fa-tachometer fa-lg" ><span>Department Progress</span></i>
            </a>
            <a href="#" class="nav-link" id="my_profile">
                <i class="fa fa-user fa-lg" ><span>My Profile</span></i>
            </a>
			<a href="#" class="nav-link" id="my_progress">
                <i class="fa fa-user fa-lg" ><span>My Progress</span></i>
            </a>
			<a href="#" class="nav-link" id="t_progress">
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
			<a href="#" class="nav-link" id="logout">
                <i class="fa fa-list-alt fa-lg" ><span>Logout</span></i>
            </a>
        </div> 
        <div class="nav-overlay"></div>   
    </nav>
                            
    <nav>
    <input id="nav-toggle" type="checkbox"> 
        <ul class="links">
            <li><a href="#Completed">Completed</a></li>
            <li><a href="#Inprogress">Inprogress</a></li>
            <li><a href="#Overdue">Overdue</a></li>
            <li><a href="#Pending">Pending</a></li>
            
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
                
                    <div class="ui-name">
                        <h2>Completed Tasks</h2>
                    </div>
                    
                
                <div class="row">
                    <div class="table">
                        <div style="overflow-x:auto;">
                            <table>
                              <tr>
                                <th>Task ID</th>
                                <th>Task Name</th>
                                <th>Done On</th>
                                <th>Approved On</th>
                                <th>Covered Hours</th>
                                
                              </tr>
                              <tr>
                                <td>023</td>
                                <td>collect and verify all the customer details</td>
                                <td>10/07/2021</td>  
                                <td>20/07/2021</td> 
                                <td>5 hrs</td>   
                              </tr>
                              <tr>
                                <td>005</td>
                                <td>create a client report and submit</td>
                                <td>15/07/2021</td>  
                                <td>pending</td> 
                                <td>3 hrs</td>   
                              </tr>
                              <tr>
                                <td>023</td>
                                <td>collect and verify all the customer details</td>
                                <td>10/07/2021</td>  
                                <td>20/07/2021</td> 
                                <td>5 hrs</td>   
                              </tr>
                              <tr>
                                <td>005</td>
                                <td>create a client report and submit</td>
                                <td>15/07/2021</td>  
                                <td>pending</td> 
                                <td>3 hrs</td>   
                              </tr>
                              <tr>
                                <td>023</td>
                                <td>collect and verify all the customer details</td>
                                <td>10/07/2021</td>  
                                <td>20/07/2021</td> 
                                <td>5 hrs</td>   
                              </tr>
                              <tr>
                                <td>023</td>
                                <td>collect and verify all the customer details</td>
                                <td>10/07/2021</td>  
                                <td>20/07/2021</td> 
                                <td>5 hrs</td>   
                              </tr>
                              <tr>
                                <td>005</td>
                                <td>create a client report and submit</td>
                                <td>15/07/2021</td>  
                                <td>pending</td> 
                                <td>3 hrs</td>   
                              </tr>
                              <tr>
                                <td>023</td>
                                <td>collect and verify all the customer details</td>
                                <td>10/07/2021</td>  
                                <td>20/07/2021</td> 
                                <td>5 hrs</td>   
                              </tr>
                         
                           
                        
                          
                              
                              
                              
                            </table>
                          </div>
                    </div>
                </div>
               
    
            </div>
        </div>
    </main>

    <!-- <footer class="footer">
        <label for="" class="footer-data">©️ 2021, All rights reserved by CO - WMS <br>
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