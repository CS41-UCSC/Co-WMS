<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Co-WMS/inprogressSelect_style.css">
    <link rel="stylesheet" href="../Co-WMS/nav_style.css">
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

            <a href="#" class="nav-link nav-link-active">
                <i class="fa fa-user fa-lg"><span>Dashboard</span></i>
            </a>
            <a href="#" class="nav-link">
                <i class="fa fa-bars fa-lg"><span>My Profile</span></i>
            </a>
            <a href="#" class="nav-link">
                <i class="fa fa-bars fa-lg"><span>My Progress</span></i>
            </a>
            <a href="#" class="nav-link">
                <i class="fa fa-user fa-lg"><span>Manage Leave</span></i>
            </a>
            <a href="#" class="nav-link">
                <i class="fa fa-bars fa-lg"><span>Team Progress</span></i>
            </a>
            <a href="#" class="nav-link">
                <i class="fa fa-user fa-lg"><span>Manage Tasks</span></i>
            </a>
            <a href="#" class="nav-link">
                <i class="fa fa-bars fa-lg"><span>Team Leave</span></i>
            </a></br></br>
            <a href="#" class="nav-link">
                <i class="fa fa-sign-out"></i><span>Logout</span></i>
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
                <div class="content">
                   
                    <div class="progress">
                        <div class="progress__fill"></div>
                        <span class="progress__text">0%</span>
                        
                    </div>
                    <h2>010</h2>
                    <h2>organize a client meeting with ZOOM and collect details.</h2>
                    <h2>Due On : 10/09/2021</h2>
                    <h2>Required Time : 2 hrs</h2>
                    <div class="tick-box">
                        <h2>Sub Tasks : </h2>
                        <label class="box">Task 1
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                        </label>
                        <label class="box">Task 2
                        <input type="checkbox">
                        <span class="checkmark"></span>
                        </label>
                        <label class="box">Task 3
                        <input type="checkbox">
                        <span class="checkmark"></span>
                        </label>
                    </div>
                    
                </div>
                <script>
                    function updateProgressBar(progressBar, value) {
                        value = Math.round(value);
                        progressBar.querySelector(".progress__fill").style.width = `${value}%`;
                        progressBar.querySelector(".progress__text").textContent = `${value}%`;
                        }

                        const myProgressBar = document.querySelector(".progress");

                        /* Example */
                        updateProgressBar(myProgressBar, 32);
                </script>
                <div class="btns">
                
                    <button class="button button2">Remark</button>
                    <button class="button button3">Save</button>
                

                </div> 
               
    
            </div>
        </div>
    </main>

    <footer class="footer">
        <label for="" class="footer-data">©️ 2021, All rights reserved by CO - WMS <br>
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
