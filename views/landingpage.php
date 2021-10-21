<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Co-WMS/style/landingpage_style.css" type="text/css">
    <link rel="stylesheet" href="../Co-WMS/style/nav_style.css" type="text/css">
    <script language="javascript" src="../Co-WMS/views/navigation.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
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
        <div class="notification"><a href="#" ><i class="fa fa-bell fa-lg" ></i></a></div>
        <span class="user-login"><?php echo $_SESSION['login_user'] ?></span>
        <img  class="img-rounded-circle" src="../Co-WMS/Asserts/<?php if($_SESSION['user_img']) {echo $_SESSION['user_img'];} else {echo 'avator.jpg';} ?>" alt="">
        

    </header>

    
    <nav class="nav">
        
        <div class="nav-links">

            <a href="#" class="nav-link " id="manage_access" >
                <i class="fa fa-pencil-square-o fa-lg"><span>Manage Access</span></i>
            </a>
            <a href="" class="nav-link" id="dashboard" >
                <i class="fa fa-tachometer fa-lg"><span>Dashboard</span></i>
            </a>
            <a href="landingpage" class="nav-link nav-link-active" id="d_progress">
                <i class="fa fa-tachometer fa-lg"><span>Department Progress</span></i>
            </a>
            <a href="myprofile" class="nav-link" id="my_profile">
                <i class="fa fa-user fa-lg"><span>My Profile</span></i>
            </a>
            <a href="#" class="nav-link" id="my_progress">
                <i class="fa fa-user fa-lg"><span>My Progress</span></i>
            </a>
            <a href="#" class="nav-link" id="t_progress">
                <i class="fa fa-users fa-lg"><span>Team Progress</span></i>
            </a>
            <a href="#" class="nav-link" id="emp_progress">
                <i class="fa fa-users fa-lg"><span>Employee Progress</span></i>
            </a>
            <a href="deptManageTask" class="nav-link" id="manage_task_dpt">
                <i class="fa fa-tasks fa-lg"><span>Manage Tasks</span></i>
            </a>
            <a href="#" class="nav-link" id="manage_task_leader">
                <i class="fa fa-tasks fa-lg"><span>Manage Tasks</span></i>
            </a>
            <a href="manageEmployee" class="nav-link" id="manage_emp">
                <i class="fa fa-pencil-square-o fa-lg"><span>Manage Employee</span></i>
            </a>
            <a href="#" class="nav-link" id="my_leave">
                <i class="fa fa-list-alt fa-lg"><span>My Leave</span></i>
            </a>
            <a href="#" class="nav-link" id="t_leave">
                <i class="fa fa-list-alt fa-lg"><span>Team Leave</span></i>
            </a>
            <a href="#" class="nav-link" id="d_leave">
                <i class="fa fa-list-alt fa-lg"><span>Department Leave</span></i>
            </a>
            <a href="#" class="nav-link" id="emp_leave">
                <i class="fa fa-list-alt fa-lg"><span>Employee Leave</span></i>
            </a>
            <a href="#" class="nav-link" id="logout">
                <i class="fa fa-list-alt fa-lg"><span>Logout</span></i>
            </a>

        </div> 
        
        <div class="nav-overlay"></div>   
    </nav>

    <main >
        <div class="container">

            <?php

                $result = $this->data;
                $hours = $this->hours;

                $a =0 ;
                $b =0 ;
                $c =0 ;
                $d =0 ;

                if($hours != NULL){
                    for($i = 0 ; $i < count($hours) ; $i++){

                        if($hours[$i][0] == "Approved")
                            $a = $hours[$i][1];
                        elseif($hours[$i][0] == "Completed")
                            $b = $hours[$i][1];
                        elseif($hours[$i][0] == "InProgress")
                            $c = $hours[$i][1];
                        elseif($hours[$i][0] == "Pending")
                            $d = $hours[$i][1];
                    }
                }
                
            ?>

            <div class="item4"> Assigned Tasks <br> <span> <?php echo ($result != NULL)?  $result[0][0] : 0 ?> </span> </div>
            <div class="item5">Completed Tasks <br> <span> <?php echo ($result != NULL)?  $result[0][1] : 0 ?> </span> </div>
            <div class="item6">Approved Tasks  <br> <span> <?php echo ($result != NULL)?  $result[0][2] : 0 ?> </span> </div>
            <div class="item7">Pending Tasks <br> <span> <?php echo ($result != NULL)?  $result[0][3] : 0 ?> </span> </div>
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

        var ip = '<?php echo $c; ?>';
        var cp = '<?php echo $b; ?>';
        var ap = '<?php echo $a; ?>';
        var pe = '<?php echo $d; ?>';

        var xValues = ["Assign Taks", "Completed Tasks", "Approved Tasks", "Pending Tasks" ];
        var yValues = [pe, cp, ap, pe];
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

        var ip = '<?php echo $c; ?>';
        var cp = '<?php echo $b; ?>';
        var ap = '<?php echo $a; ?>';
        var pe = '<?php echo $d; ?>';
        var ov= 0;
        var ashours = (Number(ip)+Number(cp)+Number(ap));

        if(ap > 160){
            ov = 160 -ap;
        }else{
            ov=0;
        }

        var pxValues = ["Assigned hours", "Overtime hours", "Covered hours"];
        var pyValues = [ ashours , ov, ap];
        var pieColors = [
        "#2177a0",
        "#00aba9",
        "#2b5797"
        ];

        new Chart("pieChart", {
        type: "pie",
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