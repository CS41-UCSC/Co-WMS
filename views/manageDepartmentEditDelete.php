<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="manageDepartmentEditDelete_style.css">
    <link rel="stylesheet" href="nav_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        
            <div class="flex-container">
               
                    <div class="left">
                        <div class="form">
                            <h1>Edit Department</h1>
                            <form action=POST>
                               
                                    <label for="Name" class="name">Department Name :</label><br>
                                    <input type="box" class="input"><br>
                        
                                    <label for="ID" class="id">Department ID   : </label><br>
                                    <input type="box" class="input"><br>
                             
                                
                                    <label for="Managers" class="selection-box">Department Manager   : </label><br>
                                    
                                        <div class="select">
                                            <select name="format" id="format">
                                            <option selected disabled>Department Manager</option>
                                            <option value="manager 1">Perera A</option>
                                            <option value="manager 2">Perera B</option>
                                            <option value="manager 3">Perera C</option>
                                            <option value="manager 4">Perera D</option>
                                            <option value="manager 5">Perera E</option>
                                            </select>
                                        </div>
                                 
                               
                               
                                
                                  
                                  
            
                                
                            </form>
            
                        </div>
                        
            
                    </div>
                    <div class="right">
                        <div class="header_fixed" align="center">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Profile</th>
                                        <th>Name</th>
                                        <th>Employee ID</th>
                                        <th></th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <tr>
                                        
                                        <td><img src="IMAGES.JFIF"></td>
                                        <td>Karunaratne W.S.P.K</td>
                                        <td>WMS/XXXX</td>
                                        <td>
                                            <label class="switch">
                                                <input type="checkbox" checked>
                                                <span class="slider round"></span>
                                              </label>
                                        

                                        </td>
                                    </tr>
                                    <tr>
                                        
                                        <td><img src=""></td>
                                        <td>Name xxxxx</td>
                                        <td>WMS/XXXX</td>
                                        <td>
                                            <label class="switch">
                                                <input type="checkbox" checked>
                                                <span class="slider round"></span>
                                              </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        
                                        <td><img src=""></td>
                                        <td>Name xxxxx</td>
                                        <td>WMS/XXXX</td>
                                        <td>
                                            <label class="switch">
                                                <input type="checkbox" checked>
                                                <span class="slider round"></span>
                                              </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        
                                        <td><img src=""></td>
                                        <td>Name xxxxx</td>
                                        <td>WMS/XXXX</td>
                                        <td>
                                            <label class="switch">
                                                <input type="checkbox" checked>
                                                <span class="slider round"></span>
                                              </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        
                                        <td><img src=""></td>
                                        <td>Name xxxxx</td>
                                        <td>WMS/XXXX</td>
                                        <td>
                                            <label class="switch">
                                                <input type="checkbox" checked>
                                                <span class="slider round"></span>
                                              </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        
                                        <td><img src=""></td>
                                        <td>Name xxxxx</td>
                                        <td>WMS/XXXX</td>
                                        <td>
                                            <label class="switch">
                                                <input type="checkbox" checked>
                                                <span class="slider round"></span>
                                              </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        
                                        <td><img src=""></td>
                                        <td>Name xxxxx</td>
                                        <td>WMS/XXXX</td>
                                        <td>
                                            <label class="switch">
                                                <input type="checkbox" checked>
                                                <span class="slider round"></span>
                                              </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        
                                        <td><img src=""></td>
                                        <td>Name xxxxx</td>
                                        <td>WMS/XXXX</td>
                                        <td>
                                            <label class="switch">
                                                <input type="checkbox" checked>
                                                <span class="slider round"></span>
                                              </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        
                                        <td><img src=""></td>
                                        <td>Name xxxxx</td>
                                        <td>WMS/XXXX</td>
                                        <td>
                                            <label class="switch">
                                                <input type="checkbox" checked>
                                                <span class="slider round"></span>
                                              </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        
                                        <td><img src=""></td>
                                        <td>Name xxxxx</td>
                                        <td>WMS/XXXX</td>
                                        <td>
                                            <label class="switch">
                                                <input type="checkbox" checked>
                                                <span class="slider round"></span>
                                              </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        
                                        <td><img src=""></td>
                                        <td>Name xxxxx</td>
                                        <td>WMS/XXXX</td>
                                        <td>
                                            <label class="switch">
                                                <input type="checkbox" checked>
                                                <span class="slider round"></span>
                                              </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        
                                        <td><img src=""></td>
                                        <td>Name xxxxx</td>
                                        <td>WMS/XXXX</td>
                                        <td>
                                            <label class="switch">
                                                <input type="checkbox" checked>
                                                <span class="slider round"></span>
                                              </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        
                                        <td><img src=""></td>
                                        <td>Name xxxxx</td>
                                        <td>WMS/XXXX</td>
                                        <td>
                                            <label class="switch">
                                                <input type="checkbox" checked>
                                                <span class="slider round"></span>
                                              </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        
                                        <td><img src=""></td>
                                        <td>Name xxxxx</td>
                                        <td>WMS/XXXX</td>
                                        <td>
                                            <label class="switch">
                                                <input type="checkbox" checked>
                                                <span class="slider round"></span>
                                              </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        
                                        <td><img src=""></td>
                                        <td>Name xxxxx</td>
                                        <td>WMS/XXXX</td>
                                        <td>
                                            <label class="switch">
                                                <input type="checkbox" checked>
                                                <span class="slider round"></span>
                                              </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        
                                        <td><img src=""></td>
                                        <td>Name xxxxx</td>
                                        <td>WMS/XXXX</td>
                                        <td>
                                            <label class="switch">
                                                <input type="checkbox" checked>
                                                <span class="slider round"></span>
                                              </label>
                                        </td>
                                    </tr>
                                    
                                    
                                </tbody>
                            </table>
                            
                        </div>
                        <div class="btn-group">
                            <button class="button">Save</button>
                            <button class="button">Cancel</button>
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
            const con = document.querySelector(".flex-container");

            document.querySelector("#btnNav").addEventListener("click" , () =>{
                nav.classList.add("nav-open");
                con.classList.add("flex-containerN");
            });

            document.querySelector(".nav-overlay").addEventListener("click" , () =>{
                nav.classList.remove("nav-open");
                con.classList.remove("flex-containerN");
            });
        });
    </script>
</body>
</html>