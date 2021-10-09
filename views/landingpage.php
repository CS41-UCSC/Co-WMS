<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Co-WMS/style/depManager_style.css" type="text/css">
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
        <div class="notification"><a href="#" ><i class="fa fa-bell fa-lg" ></i></a></div>
        <span class="user-login"><?php echo $_SESSION['login_user'] ?></span>
        <img  class="img-rounded-circle" src="../Co-WMS/Asserts/avator.jpg" alt="">
        

    </header>

    <!--<footer class="footer">
        <label for="" class="footer-data">© 2021, All rights reserved by CO - WMS <br>
                        No: 23, Flower Avenue, Colombo 7, Sri Lanka.</label>
    </footer>-->
    
    <nav class="nav">
        <div class="nav-links">

            <a href="depManager" class="nav-link nav-link-active">
                <i class="fa fa-address-card-o fa-lg"><span>Department Progress</span></i>
            </a>
            <a href="myprofile" class="nav-link">
                <i class="fa fa-user fa-lg"><span> My Profile</span></i>
            </a>
            <a href="deptManageTask" class="nav-link">
                <i class="fa fa-list fa-lg"><span>Manage Tasks</span></i>
            </a>
            <a href="manageLeave" class="nav-link">
                <i class="fa fa-calendar-times-o fa-lg"><span>Department Leave</span></i>
            </a>
            <a href="#" class="nav-link">
                <i class="fa fa-sign-out fa-lg"><span>Logout</span></i>
            </a>

        </div> 
        
        <div class="nav-overlay"></div>   
    </nav>

    <main >
        <div class="container">
            <div class="item4"> Assigned Tasks</div>
            <div class="item5">Completed Tasks</div>
            <div class="item6">Approved Tasks</div>
            <div class="item7">Pending Tasks</div>
            <div class="item8">Total hours the month 160 hrs
                <canvas id="pieChart" style="width:70%;max-width:400px;align-items:center;margin:auto"></canvas>
            </div>
            <div class="item9">Tasks vs Hours
                <canvas id="myChart"></canvas>
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

        var xValues = ["Assign Taks", "Completed Tasks", "Approved Tasks", "Pending Tasks" ];
        var yValues = [25, 12, 10, 12];
        var barColors = ["#407294", "#01786f", "#bd6c82", "#69a8a2",];

        new Chart("myChart", {
        type: "bar",
        data: {
            labels: xValues,
            datasets: [{
            backgroundColor: barColors,
            data: yValues
            }]
        },
        options: {
            legend: {display: false},
            title: {
            display: true,
            text: ""
            },
            scales: {
                yAxes: [{
                ticks: {
                    beginAtZero: true,
            }
            }]
            }
        }

        });

    </script>

    <script>
        var pxValues = ["Assigned hours", "Overtime hours", "Covered hours"];
        var pyValues = [55, 49, 44];
        var pieColors = [
        "#2177a0",
        "#00aba9",
        "#2b5797"
        ];

        new Chart("pieChart", {
        type: "doughnut",
        data: {
            labels: pxValues,
            datasets: [{
            backgroundColor: pieColors,
            data: pyValues
            }]
        },
        options: {
            title: {
            display: true,
            text: ""
            }
        }
        });
    </script>
</body>
</html>