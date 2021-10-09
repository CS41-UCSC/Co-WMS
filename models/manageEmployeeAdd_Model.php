<?php

class manageEmployeeAdd_Model extends Model{

    function __construct()
    {
        parent::__construct();
    }

    // public function addData($data){

    //     $fname = $data['fname'];
    //     $email = $data['email'];
    //     $password = $data['password'];
       
    //     $query = "INSERT INTO systemuser(fname, email, password)
    //     //     VALUES ('$fname','$email','$password')";

    //     $this->db->insertQuery($query);
    // }


    public function addData($data) {
        $fname = $data['fname'];
        $email = $data['email'];
        $password = $data['password'];
        
        

        $query = "INSERT INTO systemuser(EmpId, EmpName, EmpEmail, password) values('$EmpID','$fname','$email', '$password')";
        
            $this->db->insertQuery($query);

        // $this->db->insertQuery($query);
    }
}