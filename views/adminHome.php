<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/Co-WMS/style/nav_style.css?<?php echo time(); ?>" type="text/css">
	<link rel="stylesheet" href="http://localhost/Co-WMS/style/adminHome.css?<?php echo time(); ?>" type="text/css">
	<link rel="stylesheet" href="http://localhost/Co-WMS/style/notification_style.css?<?php echo time(); ?>" type="text/css">
    <link rel="stylesheet" href="http://localhost/Co-WMS/font-awesome-4.7.0/css/font-awesome.min.css">
	<script language="javascript" src="http://localhost/Co-WMS/views/navigation.js?<?php echo time(); ?>" >
	</script>
    <title>Co-WMS</title>
</head>

<body class="preload" onload='setbutton("<?php echo $_SESSION["memberaccess"] ?>","<?php echo $_SESSION["myprofile"] ?>","<?php echo $_SESSION["manageraccess"] ?>","<?php echo $_SESSION["leaderaccess"] ?>","<?php echo $_SESSION["hraccess"] ?>","<?php echo $_SESSION["adminaccess"] ?>")'>
    <header class="header">
        <button class="header-button" id="btnNav" type="button">
            <i class="fa fa-bars fa-lg"></i>
        </button>
        <img src="http://localhost/Co-WMS/Asserts/logo.jpg" alt="" class="open-img">
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
        <div class="notification" >
			<button class="icon"><i class="fa fa-bell fa-lg" ></i>
				<span class="badge">3</span>
			</button>
			<div class="list" >
				<a href="#">HR-DM-001 has been Assigned as HR Manager</a>
				<a href="#">IT-TH-012 has been Terminated</a>
				<a href="#">Revoke all access from </a>
				<a href="#">10 Hours Pending to Complete</a>
			</div>
		</div>
        <div class="user-login"> <?php echo $_SESSION['login_user']; ?> </div>
        <img  class="img-rounded-circle" src="http://localhost/Co-WMS/Asserts/avator.jpg" alt="" />
    </header>
	<div class="page">
		<!--<div class="nav-icons">
            <a href="#" class="nav-link nav-link-active" id="manage_access">
                <i class="fa fa-pencil-square-o fa-lg"></i>
            </a>
            <a href="#" class="nav-link" id="dashboard">
                <i class="fa fa-tachometer fa-lg" ></i>
            </a>
			<a href="#" class="nav-link" id="d_progress">
                <i class="fa fa-tachometer fa-lg" ></i>
            </a>
            <a href="#" class="nav-link" id="my_profile">
                <i class="fa fa-user fa-lg" ></i>
            </a>
			<a href="#" class="nav-link" id="my_progress">
                <i class="fa fa-user fa-lg" ></i>
            </a>
			<a href="#" class="nav-link" id="t_progress">
                <i class="fa fa-users fa-lg" ></i>
            </a>
			<a href="#" class="nav-link" id="emp_progress">
                <i class="fa fa-users fa-lg" ></i>
            </a>
            <a href="#" class="nav-link" id="manage_task_dpt">
                <i class="fa fa-tasks fa-lg" ></i>
            </a>
			<a href="#" class="nav-link" id="manage_task_leader">
                <i class="fa fa-tasks fa-lg" ></i>
            </a>
            <a href="#" class="nav-link" id="manage_emp">
                <i class="fa fa-pencil-square-o fa-lg" ></i>
            </a>
            <a href="#" class="nav-link" id="my_leave">
                <i class="fa fa-list-alt fa-lg" ></i>
            </a>
			<a href="#" class="nav-link" id="t_leave">
                <i class="fa fa-list-alt fa-lg" ></i>
            </a>
			<a href="#" class="nav-link" id="d_leave">
                <i class="fa fa-list-alt fa-lg" ></i>
            </a>
			<a href="#" class="nav-link" id="emp_leave">
                <i class="fa fa-list-alt fa-lg" ></i>
            </a>
			<a href="#" class="nav-link" id="logout">
                <i class="fa fa-list-alt fa-lg" ></i>
            </a>
        </div>-->
		<nav class="nav">
        <div class="nav-links nav-link-icons">
			<a href="http://localhost/Co-WMS/admin/adminHome" class="nav-link nav-link-active" id="manage_access">
                <i class="fa fa-pencil-square-o fa-lg"><span>Manage Access</span></i>
            </a>
            <a href="http://localhost/Co-WMS/landingpage" class="nav-link" id="dashboard">
                <i class="fa fa-tachometer fa-lg" ><span>Dashboard</span></i>
            </a>
			<a href="http://localhost/Co-WMS/landingpage" class="nav-link" id="d_dashboard">
                <i class="fa fa-tachometer fa-lg" ><span>Department Progress</span></i>
            </a>
			<a href="http://localhost/Co-WMS/teamProgress" class="nav-link" id="d_progress">
                <i class="fa fa-users fa-lg" ><span>Team Progress</span></i>
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
			<a href="http://localhost/Co-WMS/employeeWorkProgress" class="nav-link" id="emp_progress">
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
		<div class="item1" >
			<form method="POST" action="adminHome" >
			<center><input type="text" name="empId" placeholder="EmployeeID" id="emp_search" />
			<button type="submit" name="search_btn" class="fabtn" id="searchbtn" >
				<i class="fa fa-search fa-lg" ></i>
			</button>
			</br></br>
			<button type="submit" name="search_all" class="fabtn" id="searchall" >
				<span style="font-weight: bold">Show All</span>
			</button>
			</center>
			</form>
        </div>
		<div class="item2">
			<center> 
				<table id="emp_table" >
				<tr><th>ID</th><th>Name</th><th>Role</th><th>Action</th></tr>
				<?php
					$emp=$this->emp;
					if(!empty($emp)){
					foreach($emp as $row){
						echo '<tr id= ' . $row['0'] . '>';
						echo'<td class="row-data">'.$row['EmpID'].'</td>';
						echo '<td class="row-data">'.$row['EmpName'].'</td>';
						echo '<td class="row-data">'.$row['EmpRole'].'</td>';
						echo '<td class="row-data">'.'<a href="manageAccess?empID='.$row['EmpID'].' " >'.'<button type="button" class="fabtn">'.'<i class="fa fa-pencil fa-lg">'.'</i>'.'</button>'.'</a>'.'</td>';
						echo'</tr>';
					}
					}else{
						echo "No records found";
					}
				?>
				
			</table></center>
		</div>
		</div>
    </main>
	</div>
   <footer class="footer">
        <label class="footer-data">© 2021, All rights reserved by CO - WMS <br> Sri Lanka</label>
    </footer>
    <script>
        document.addEventListener("DOMContentLoaded", () =>{
            const nav = document.querySelector(".nav");
			const con = document.querySelector(".container");
			const navbtn = document.querySelector("#btnNav");
			const overlay = document.querySelector(".nav-overlay");
			const span = document.querySelector("span")

            navbtn.addEventListener("click" , () =>{
                nav.classList.add("nav-open");
                con.classList.add("containerN");
            });

            overlay.addEventListener("click" , () =>{
                nav.classList.remove("nav-open");
                con.classList.remove("containerN");
				
            });
			
        });
		
	</script>
</body>
</html>