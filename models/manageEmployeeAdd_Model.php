<?php

class manageEmployeeAdd_Model extends Model{

    function __construct()
    {
        parent::__construct();
    }

    function insertEmployee($empid,$empname,$empemail,$team,$dept,$emprole,$hash,$password){

        try{
            $this->db->beginTransaction();
        
            $sql1 = "INSERT INTO systemuser (`EmpID`, `EmpName`, `EmpEmail`, `EmpRole`, `PASSWORD`) VALUES ('$empid','$empname','$empemail','$emprole','$hash') " ;
            $insert = $this->db->query($sql1);

            if($emprole == "Team_Member"){
                $sql3 ="INSERT INTO team_member (`EmpID`, `TeamID`,`EndDate` ) VALUES ('$empid','$team', null)";
                $this->db->query($sql3);
            }
            elseif($emprole == "Team_Leader"){
                $sql3 ="INSERT INTO team_Leader (`EmpID`, `TeamID`,`EndDate` ) VALUES ('$empid','$team', null)";
                $this->db->query($sql3);
            }elseif($emprole == "Dept_Manager"){
                $sql3 ="INSERT INTO dept_manager (`EmpID`, `DeptID`,`EndDate` ) VALUES ('$empid','$dept', null)";
                $this->db->query($sql3);
            }
           

            $mail_subject = 'Message from Co-WMS website';
            $email_body = "Hello {$empname},Welcome to the Co-WMS Company \n" ;
            $email_body .= "Your User Id : {$empid} \n";
            $email_body .= "Your Password : {$password} \n";
            $email_body .= "Thank you.";
            $from = 'From: cowmsofficial@gmail.com';
                    
            $send_mail_result = mail($empemail, $mail_subject, $email_body, $from);

            if($send_mail_result){
                $this->db->commit();
                return true;
            }
           
            else{
                $this->db->rollback();
                return false;
            }
     
        }
        
        catch(PDOException $e)
        {
            $this->db->rollback();
    	    $_SESSION['add-emp-msg'] = $e->getMessage();
            return false;
        }

        /*try{
            $this->db->exec($sql);
                $_SESSION['add-emp-msg'] = "New record created successfully";
                return true;
            }
        catch(PDOException $e)
        {

    	    $_SESSION['add-emp-msg'] = $e->getMessage();
            return false;
        }*/

        
    }


}