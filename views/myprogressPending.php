<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Co-WMS/style/myprogressPending_style.css">
    <link rel="stylesheet" href="../Co-WMS/style/nav_style.css">
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
            <li><a href="#In Progress">In Progress</a></li>
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
                 
                <table class="table">
                    <thead>
                        <tr>
                        <th>Task Id</th>
                        <th>Task Name</th>
                        <th>Assigned On</th>
                        <th>Due On</th>
                        <th>Required Time</th>
                        <th>View</th>
                        <th>Accept</th>
                        <th>Remark</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-label="Task Id">003</td>
                            <td data-label="Task Name">Collect verify the all the customer details</td>
                            <td data-label="Assigned On">10/07/2021</td>
                            <td data-label="Due On">10/07/2021</td>
                            <td data-label="Required Time">5 hrs</td>
                            <!-- <td data-label="View"><a href="#"><i class="fa fa-eye fa-2x" style="color:black;" aria-hidden="true"></i></a></td> -->
                            <td data-label="View">
                                <button class="button" data-modal="modalOne1"><i class="fa fa-eye fa-2x" style="color:black;" aria-hidden="true"></i></button>
                            </td>
                            <td data-label="Accept"><a href="#"><i class="fa fa-check-circle-o fa-2x" style="color:black;" aria-hidden="true"></i></a></td>
                            <td data-label="Remark"><button class="button" data-modal="modalOne"><i class="fa fa-pencil-square-o fa-2x" style="color:black;" aria-hidden="true"></i></button></td>
                        </tr>
                        <tr>
                            <td data-label="Task Id">003</td>
                            <td data-label="Task Name">Collect verify the all the customer details</td>
                            <td data-label="Assigned On">10/07/2021</td>
                            <td data-label="Due On">10/07/2021</td>
                            <td data-label="Required Time">5 hrs</td>
                            <!-- <td data-label="View"><a href="#"><i class="fa fa-eye fa-2x" style="color:black;" aria-hidden="true"></i></a></td> -->
                            <td data-label="View">
                                <button class="button" data-modal="modalOne1"><i class="fa fa-eye fa-2x" style="color:black;" aria-hidden="true"></i></button>
                            </td>
                            <td data-label="Accept"><a href="#"><i class="fa fa-check-circle-o fa-2x" style="color:black;" aria-hidden="true"></i></a></td>
                            <td data-label="Remark"><button class="button" data-modal="modalOne"><i class="fa fa-pencil-square-o fa-2x" style="color:black;" aria-hidden="true"></i></button></td>
                        </tr>
                        <tr>
                            <td data-label="Task Id">003</td>
                            <td data-label="Task Name">Collect verify the all the customer details</td>
                            <td data-label="Assigned On">10/07/2021</td>
                            <td data-label="Due On">10/07/2021</td>
                            <td data-label="Required Time">5 hrs</td>
                            <!-- <td data-label="View"><a href="#"><i class="fa fa-eye fa-2x" style="color:black;" aria-hidden="true"></i></a></td> -->
                            <td data-label="View">
                                <button class="button" data-modal="modalOne1"><i class="fa fa-eye fa-2x" style="color:black;" aria-hidden="true"></i></button>
                            </td>
                            <td data-label="Accept"><a href="#"><i class="fa fa-check-circle-o fa-2x" style="color:black;" aria-hidden="true"></i></a></td>
                            <td data-label="Remark"><button class="button" data-modal="modalOne"><i class="fa fa-pencil-square-o fa-2x" style="color:black;" aria-hidden="true"></i></button></td>
                        </tr>
                        <tr>
                            <td data-label="Task Id">003</td>
                            <td data-label="Task Name">Collect verify the all the customer details</td>
                            <td data-label="Assigned On">10/07/2021</td>
                            <td data-label="Due On">10/07/2021</td>
                            <td data-label="Required Time">5 hrs</td>
                            <!-- <td data-label="View"><a href="#"><i class="fa fa-eye fa-2x" style="color:black;" aria-hidden="true"></i></a></td> -->
                            <td data-label="View">
                                <button class="button" data-modal="modalOne1"><i class="fa fa-eye fa-2x" style="color:black;" aria-hidden="true"></i></button>
                            </td>
                            <td data-label="Accept"><a href="#"><i class="fa fa-check-circle-o fa-2x" style="color:black;" aria-hidden="true"></i></a></td>
                            <td data-label="Remark"><button class="button" data-modal="modalOne"><i class="fa fa-pencil-square-o fa-2x" style="color:black;" aria-hidden="true"></i></button></td>
                        </tr>
                        <tr>
                            <td data-label="Task Id">003</td>
                            <td data-label="Task Name">Collect verify the all the customer details</td>
                            <td data-label="Assigned On">10/07/2021</td>
                            <td data-label="Due On">10/07/2021</td>
                            <td data-label="Required Time">5 hrs</td>
                            <!-- <td data-label="View"><a href="#"><i class="fa fa-eye fa-2x" style="color:black;" aria-hidden="true"></i></a></td> -->
                            <td data-label="View">
                                <button class="button" data-modal="modalOne1"><i class="fa fa-eye fa-2x" style="color:black;" aria-hidden="true"></i></button>
                            </td>
                            <td data-label="Accept"><a href="#"><i class="fa fa-check-circle-o fa-2x" style="color:black;" aria-hidden="true"></i></a></td>
                            <td data-label="Remark"><button class="button" data-modal="modalOne"><i class="fa fa-pencil-square-o fa-2x" style="color:black;" aria-hidden="true"></i></button></td>
                        </tr>





                    
                    </tbody>
                </table>
                <!-- vvnvnbnb -->
                <div id="modalOne" class="modal">
                    <div class="modal-content">
                        <div class="contact-form">
                            <a class="close">&times;</a>
                            <form action="/">
                                <h3>Remark</h3>
                                <span>Message</span>
                                <div>
                                    <textarea rows="4"></textarea>
                                </div>
                                <button type="submit" href="/">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div id="modalOne1" class="modal">
                    <div class="modal-content1">
                        
                            <a class="close">&times;</a>
                            <p>jbdsdbsnbnsbdnsbdnmsbdnsbdnmsbdnmsb <br> dnsbdnmbsmndbn</p>
                        
                    </div>
                </div>
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

    <!-- vvnvnbnb -->
    <script>
      let modalBtns = [...document.querySelectorAll(".button")];
      modalBtns.forEach(function(btn) {
        btn.onclick = function() {
          let modal = btn.getAttribute('data-modal');
          document.getElementById(modal)
            .style.display = "block";
        }
      });
      let closeBtns = [...document.querySelectorAll(".close")];
      closeBtns.forEach(function(btn) {
        btn.onclick = function() {
          let modal = btn.closest('.modal');
          modal.style.display = "none";
        }
      });
      window.onclick = function(event) {
        if(event.target.className === "modal") {
          event.target.style.display = "none";
        }
      }
    </script>
    


</body>
</html>