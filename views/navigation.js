var MemberAccess = true;
var MyProfile = true;
var ManagerAccess = false;
var LeaderAccess = false;
var HRAccess = false;
var AdminAccess = false;

function setbutton(){
	
	if(!MemberAccess){
		
		//none display will remove the div
		document.getElementById("dashboard").style.display="none"; 
		document.getElementById("my_progress").style.display="none";
		document.getElementById("t_dashboard").style.display="none";
		document.getElementById("my_leave").style.display="none";
		
	}
	
	if(!MyProfile){
		
		document.getElementById("my_profile").style.display="none";
		
	}
	
	if(!ManagerAccess){
	
		document.getElementById("d_progress").style.display="none";
		document.getElementById("manage_task_dpt").style.display="none";
		document.getElementById("d_leave").style.display="none";
		
	}
	
	if(!LeaderAccess){
		
		document.getElementById("manage_task_leader").style.display="none";
		document.getElementById("t_leave").style.display="none";
		
	}
	
	if(!HRAccess){
	
		document.getElementById("emp_progress").style.display="none";
		document.getElementById("manage_emp").style.display="none";
		document.getElementById("emp_leave").style.display="none";
	}
	
	if(!AdminAccess){
		
		document.getElementById("manage_access").style.display="none";
		
	}
	
}