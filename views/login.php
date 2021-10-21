<?php

    if (empty ($_SESSION['msg'])){
        $_SESSION['msg'] = "Hello";
    }
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Co-WMS/style/login_style.css" type="text/css">
    <title>Document</title>
</head>
<body>
    
    <div class="container">
        <div class="item1">
            <div class="form">
                <h1>Get <span>Started</span></h1>
                <div id="msg"><span>
                    <?php  
                    if(strcmp($_SESSION['msg'],"Hello") && strcmp($_SESSION['msg'],"valid") ){
                        echo $_SESSION['msg'];
                        echo '<script type="text/javascript">document.getElementById("msg").style.display="block";</script>';
                    }
                    ?>
		</span></div>
                <form name="myform" method="POST">
                    
                    <label for="username" >Username</label>
                    <input type="text" class="input-fields" placeholder="Username" id="username" name="user_name" onkeyup="validation()">
                    <label for="password" >Password</label>
                    <input type="password" class="input-fields" placeholder="Password" id="password" name="password">
                    <input type="submit" value="Login" class="button" onclick="submitf()">
                    <div class="link">
                        <a href="">Forgot Password?</a><br>
                    </div>
            </form>
            </div> 
        </div>
        <div class="item2">
            <img src="../Co-WMS/Asserts/login.jpeg" alt="">
        </div>
    </div>

    
</body>

<script type="text/javascript">

    var res="";

    function validation(){
        
        var username=document.getElementById("username").value;
        var usernamepattern=/^[A-Za-z .]{1,4}-[A-Za-z .]{2,3}-[0-9]{3}/;

        if(usernamepattern.test(username))
        {
            document.getElementById("username").style.border='1px solid green'; 
            res="green";
        }
        else
        {
            document.getElementById("username").style.border='1px solid red'; 
            res = "red";
        }
	}

    function submitf(){
       
        if(res=="green"){
            
            document.myform.action = "login/run";

        }

        else if(res=="red"){

            document.getElementById("msg").innerHTML = "Invalid username and password";
            document.getElementById("msg").style.border='1px solid red'; 
            document.getElementById("username").style.border='transparent';
            event.preventDefault();
            
        }
    }

    

</script>


</html>
