<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Co-WMS/style/manageEmployeeAdd_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>

<body class="preload">
    <header class="header">
        <button class="header-button" id="btnNav" type="button">
            <i class="fa fa-bars fa-lg"></i>
        </button>
        <img src="logo.jpg" alt="" class="open-img">
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

            <a href="#" class="nav-link nav-link-active">
                <i class="fa fa-user fa-lg"><span>Departmet Progress</span></i>
            </a>
            <a href="#" class="nav-link">
                <i class="fa fa-bars fa-lg"><span>My Profile</span></i>
            </a>
            <a href="#" class="nav-link">
                <i class="fa fa-bars fa-lg"><span>Manage Employee</span></i>
            </a>
            <a href="#" class="nav-link">
                <i class="fa fa-bars fa-lg"><span>Manage Tasks</span></i>
            </a>
            <a href="#" class="nav-link">
                <i class="fa fa-user fa-lg"><span>Employee Progress</span></i>
            </a>
            <a href="#" class="nav-link">
                <i class="fa fa-bars fa-lg"><span>Employee Leave</span></i>
            </a>
            <a href="#" class="nav-link">
                <i class="fa fa-bars fa-lg"><span>Department Leave</span></i>
            </a>
        </div> 
        <div class="nav-overlay"></div>   
    </nav>
                            
    <nav>
    <input id="nav-toggle" type="checkbox"> 
        <ul class="links">
            <li><a href="#Employees">Employees</a></li>
            <li><a href="#Departments">Departments</a></li>
            <li><a href="#Teams">Teams</a></li>
        </ul>
        <label for="nav-toggle" class="icon-burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </label>
    </nav>
    
    <main>
        <div class="container">
            <div class="flex-container1">
                <div>Add Employee</div>
                
            </div>
            <form action="<?php echo URL?>manageEmployeeAdd" method="POST">
                <div class="flex-container">
                    <!-- <form action=""> -->
                    <?php
                           $result = $this->users;
                            // $fname = $this->users[0]['fname'];
                            // $email = $this->users[0]['email'];
                            // $password = $this->users[0]['password'];
                    
                    ?>

                        <div>
                            <label for="fname">First Name :</label><br>
                            <input  type="text" id="fname" name="fname"  placeholder="<?php (!empty($data['fname_err'])) ? print $data['fname_err'] : print 'fname*'; ?>"><br>
                        </div>
                        <div>
                            <label for="lname">Last Name :</label><br>
                            <input type="text" id="lname" name="lname" placeholder="Last Name"><br>
                        </div>
                        <div>
                            <label for="mail">E-mail Address :</label><br>
                            <input type="email" id="email" name="email"  placeholder="<?php (!empty($data['email_err'])) ? print $data['email_err'] : print 'email*'; ?>"><br>
                        </div>
                        <div>
                            <label for="mnumber">Mobile Number :</label><br>
                            <input type="tel" id="mnumber" name="mnumber" placeholder="Mobile Number"><br>
                        </div>
                        <div>
                            <label for="role" id="label-role">Department :</label><br>
                            <select name="role" id="role">
                                <option value="IT Department">IT Department</option>
                                <option value="Financial Department">Financial Department</option>
                                <option value="Abc Department">Abc Department</option>
                                <option value="other">Other</option>
                            </select><br>
                        </div>
                        <div>
                            <label for="password">Password :</label><br>
                            <input type="text" id="password" name="password"  placeholder="<?php (!empty($data['password_err'])) ? print $data['password_err'] : print 'password*'; ?>"><br>
                        </div>
                        <div>
                            <label for="birthday">Date of Birth :</label><br>
                            <input type="date" id="birthday" name="birthday"><br>
                        </div>
                        <div>
                            <label for="gender">Gender :</label><br>
                            <input type="radio" name="gender" value="male"> Male
                            <input type="radio" name="gender" value="female"> Female<br>
                        </div>
                        <div>
                            <form action="POST">
                                <input type="submit" value="Cancel" class="rectan">
                            </form>
                        </div>
                        <div>
                            <form action="manageEmployee">
                                <input type="submit" name="Add" value="Add" class="rectan">
                            </form>
                        </div>
                    <!-- </form> -->
                </div>
            </form>
        </div>
    </main>

    <footer class="footer">
        <label for="" class="footer-data">© 2021, All rights reserved by CO - WMS <br>
                        No: 23, Flower Avenue, Colombo 7, Sri Lanka.</label>
    </footer>
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