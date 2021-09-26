<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Co-WMS/style/myprofile_style.css" type="text/css">
    <link rel="stylesheet" href="../Co-WMS/style/navbar_style.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
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
        <div class="notification"><a href="#" ><i class="fa fa-bell fa-lg" "></i></a></div>
        <span class="user-login"><?php echo $_SESSION['login_user'] ?></span>
        <img  class="img-rounded-circle" src="../Co-WMS/Asserts/avator.jpg" alt="">
        

    </header>
    <nav class="nav">
        <div class="nav-links">

            <a href="#" class="nav-link" >
                <i class="fa fa-user fa-lg"><span>Dashboard</span></i>
            </a>
            <a href="#" class="nav-link nav-link-active">
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
            

            <?php  $result = $this->users; ?>

            <div class="item1"> 
                <form action="myprofile/savephoto" method="POST" enctype="multipart/form-data" name="form1">
                <div class="img-card">
                
                    <img src="../Co-WMS/Asserts/<?php echo $result[0]['Userimg']; ?>" alt="" id="photo">
                    <input type="file" id="file" name="image">
                    <div class="btn"><label for="file" id="uploadBtn">Choose photo</label></div>
                    <input type="submit" value="Save Changes" id="sbtbtn" onclick="submitphoto();">

                </div>
                </form>
            </div>
            <div class="item2"> 
                <form action="myprofile/saveform" method="POST" class="data-form">
                    <label for="empid">Employee ID</label>
                    <input type="text" name="empid" value="<?php echo $result[0]['EmpID'] ?>" readonly class="input-fields"><br>
                    <label for="empname">Name (with initials)</label>
                    <input type="text" name="empname" value="<?php echo $result[0]['EmpName'] ?>" readonly class="input-fields"><br>
                    <label for="empemail">Email</label>
                    <input type="text" name="empemail" value="<?php echo $result[0]['EmpEmail'] ?>" readonly class="input-fields"><br>
                    <label for="emprole">Employee Role</label>
                    <input type="text" name="emprole" value="<?php echo $result[0]['EmpRole'] ?>" readonly class="input-fields"><br>
                    <label for="empstatus">Employee Status</label>
                    <input type="text" name="empstatus" value="<?php echo $result[0]['EmpStatus'] ?>" readonly class="input-fields"><br>
                    <label for="add">Current Password</label>
                    <input type="password" name="cpass" value="<?php echo $result[0]['PASSWORD'] ?>" class="input-fields"><br>
                    <label for="add">New Password</label>
                    <input type="password" name="npass" value="<?php echo $result[0]['PASSWORD'] ?>" class="input-fields"><br>
                    <input type="submit" value="Save Changes" class="button" >
                </form>
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

        const imgDiv = document.querySelector('.img-card');
        const img = document.querySelector('#photo');
        const file = document.querySelector('#file');
        const uploadBtn = document.querySelector('#uploadBtn');

        file.addEventListener ('change' , function(){
            const choosedFile = this.files[0];

            if (choosedFile){

                const reader = new FileReader();

                reader.addEventListener('load',function(){
                    img.setAttribute ('src',reader.result)
                });

                reader.readAsDataURL(choosedFile);
            }
        });

    </script>

    <script>

        function submitphoto(){
            document.form1.action()
        }
    </script>
    
</body>
</html>
