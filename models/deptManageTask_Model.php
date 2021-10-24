<?php

class deptManageTask_Model extends Model{

    function __construct()
    {
        parent::__construct();

    }

    function getData($empId){

        //$sql = "SELECT tk.TeamID, tm.TeamName, tk.TaskName FROM Task tk, Team tm  WHERE tk.TeamID  IN ( SELECT teamID FROM Team WHERE DeptID IN ( SELECT DeptID FROM dept_manager WHERE EmpID =  '$empId' ) ) ; ";

        $sql1 = "SELECT DeptID FROM dept WHERE Dept_Manager = ('$empId') ;";
        $dept= $this->db->runQuery($sql1);

        $dept_ID = $dept[0]['DeptID'];

        //$sql = "SELECT tk.TeamID, tm.TeamName, tk.TaskName FROM Team tm INNER JOIN Task tk ON tk.TeamID = tm.TeamID  WHERE tm.DeptID = ('$dept_ID')  ; " ;
        $sql = "SELECT tk.TeamID, tm.TeamName, tk.TaskName, tk.TaskID FROM Team tm INNER JOIN Task tk ON tk.TeamID = tm.TeamID  
        WHERE tm.DeptID = ('$dept_ID') AND NOT EXISTS  (select 1 FROM task_assign ts WHERE ts.TaskID = tk.TaskID) ; " ;

        return $this->db->runQuery($sql);

    }

    function insertData(){

        $id = $_POST['tid'];
        $name = $_POST['tname'];

        $sql = "INSERT INTO task (TeamID, TaskName) VALUES ('$id', '$name')" ;

        if ($this->db->query($sql) == TRUE) {
            $_SESSION['addTask'] = "yes";
          } else {
            $_SESSION['addTask'] = "no";
        }

        $a = array();
        $sub1 = $_POST['sub1'];
        $sub2 = $_POST['sub2'];
        $sub3 = $_POST['sub3'];
        $sub4 = $_POST['sub4'];
        array_push($a,$sub1,$sub2,$sub3,$sub4);
        
        
        for ($i = 0; $i <4; $i++){

            if($a[$i]){
                
                echo $a[$i];

                $sql = "INSERT INTO subtask (TaskID, SubTaskName) VALUES ('$id', '$a[$i]')" ;
    
                if ($this->db->query($sql) == TRUE) {
                    $_SESSION['addTask'] = "yes";
                  } else {
                    $_SESSION['addTask'] = "no";
                }
                
            }
            

        }
                
    }

}