<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Co-WMS/style/manageEmployee_style.css" type="text/css">
    <link rel="stylesheet" href="../Co-WMS/style/navbar_style.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>

<body class="preload">
    <header class="header">
        <button class="header-button" id="btnNav" type="button">
            <i class="fa fa-bars fa-lg"></i>
        </button>
        <img src="../Co-WMS/Asserts/logo.jpeg" alt="" class="open-img">
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
        <div class="notification"><a href="#" ><i class="fa fa-bell fa-lg" "></i></a></div>
        <span class="user-login">Username</span>
        <img  class="img-rounded-circle" src="../Co-WMS/Asserts/avator.jpg" alt="">
        

    </header>
    <nav class="nav">
        <div class="nav-links">

            <a href="#" class="nav-link nav-link-active">
                <i class="fa fa-user fa-lg"><span>Dashboard</span></i>
            </a>
            <a href="#" class="nav-link">
                <i class="fa fa-bars fa-lg"><span>My Profile</span></i>
            </a>
            <a href="#" class="nav-link">
                <i class="fa fa-bars fa-lg"><span>My Profile</span></i>
            </a>
            <a href="#" class="nav-link">
                <i class="fa fa-user fa-lg"><span>My Profile</span></i>
            </a>
            <a href="#" class="nav-link">
                <i class="fa fa-bars fa-lg"><span>My Profile</span></i>
            </a>
        </div> 
        <div class="nav-overlay"></div>   
    </nav>

    <main >

        <div class="container">
        
            <div class="item1">
                <label for="" class="pagename">All Employees</label>
                <form>
                    <input type="text" id="search" name="Ename" placeholder="Search Employee">
                </form>
                <button class="addemp" >Add Employee</button>
            </div>
            
            <div class="item2">
                <div id="results">
                        <table id="mytable" > 
                            <col id="profilepng">
                            <col id="ID">
                            <col id="FName">
                            <col id="LName">
                            <col id="del">
                            <col id="edit">
                            <thead>
                                <tr>
                                    <th></div></th>
                                    <th>Emp-ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>delete</button></th>
                                    <th>edit</button></th>
                                </tr >
                            </thead>
                            <tbody>
                                <tr>
                                    <td><div class="profile"><img src="../Co-WMS/Asserts/avator.jpg" width="60" height="60"></div></td>
                                    <td>Emp-ID</td>
                                    <td>First Name</td>
                                    <td>Last Name</td>
                                    <td><button type="button" class="minus"><i class="fa fa-minus-circle fa-lg"></i></button></td>
                                    <td><button type="button" class="pen"><i class="fa fa-edit fa-lg"></i></button></td>
                                </tr>
                                <tr>
                                    <td><div class="profile"><img src="../Co-WMS/Asserts/avator.jpg" width="60" height="60"></div></td>
                                    <td>Emp-ID</td>
                                    <td>First Name</td>
                                    <td>Last Name</td>
                                    <td><button type="button" class="minus"><i class="fa fa-minus-circle fa-lg"></i></button></td>
                                    <td><button type="button" class="pen"><i class="fa fa-edit fa-lg"></i></button></td>
                                </tr>
                            </tbody>
                            
                        </table>
                </div>
            </div>
        
    
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