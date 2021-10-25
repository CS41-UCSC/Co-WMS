function setbutton(v1,v2,v3,v4,v5,v6){


	var MemberAccess = v1;
	var MyProfile = v2;
	var ManagerAccess = v3;
	var LeaderAccess = v4;
	var HRAccess = v5;
	var AdminAccess = v6;
	
	f1(MemberAccess)
	f2(MyProfile)
	f3(ManagerAccess)
	f4(LeaderAccess)
	f5(HRAccess)
	f6(AdminAccess)
	
}

function f1(MemberAccess){
	if(MemberAccess==0){
		
		//none display will remove the div
		document.getElementById("dashboard").style.display="none"; 
		document.getElementById("my_progress").style.display="none";
		document.getElementById("t_progress").style.display="none";
		document.getElementById("my_leave").style.display="none";
	}
}
	
function f2(MyProfile){
	if(MyProfile==0){
		
		document.getElementById("my_profile").style.display="none"; 
		
	}
}	
	
function f3(ManagerAccess){
	if(ManagerAccess==0){
	
		document.getElementById("d_progress").style.display="none";
		document.getElementById("manage_task_dpt").style.display="none";
		document.getElementById("d_leave").style.display="none";
		
	}
}	
	
function f4(LeaderAccess){
	
	if(LeaderAccess==0){
		
		document.getElementById("manage_task_leader").style.display="none";
		document.getElementById("t_leave").style.display="none";
		
	}
}	
	
function f5(HRAccess){
	if(HRAccess==0){
		
		document.getElementById("emp_progress").style.display="none";
		document.getElementById("manage_emp").style.display="none";
		document.getElementById("emp_leave").style.display="none";
	}
}	
	
function f6(AdminAccess){
	if(AdminAccess==0){
		
		document.getElementById("manage_access").style.display="none";
		
	}
}	
	
	

