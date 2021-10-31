<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/resetPassword_style.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="left">
            <div class="form">
                <h1>Change <span>Password</span></h1>

                <form method="POST" name="resetform">
                    <div class="box">
                        <label for="Email" class="verifi">Verification Code</label><br>
                        <input type="text" class="input" name="otpcode"><br>
                        <label for="Email" class="new_pass">New Password</label><br>
                        <input type="password" class="input" name="npassword" id="npass" onkeyup="validationn();"><br>
                        <label for="Email" class="confirm_pass">Confirm New Password</label><br>
                        <input type="password" class="input" name="cpassword" id="cpass" onkeyup="validationc();"><br>
                    </div>

                    <input type="submit" value="Change My Password" class="button" onclick="submitf();">

                </form>

            </div>

        </div>
        <div class="right">
            <!-- <div class="text1">
                <h1>You Can Chanage The Password To Your Liking....</h1>
            </div>
            <div class="text2">
                <h1>Password must have : </h1>
                <ul>
                    <li>Minimum 8 characters</li>
                    <li>English uppercase/lowercase letters</li>
                    <li>Numerals and Symbols</li>
                </ul>
            </div> -->
            <div class="text2">
                <h1>Password must have : </h1>
                <ul>
                    <li>Minimum 8 characters</li>
                    <li>English uppercase/lowercase letters</li>
                    <li>Numerals and Symbols</li>
                </ul>
            </div>
            <img src="../Asserts/reset_password.png" class="image">

        </div>
    </div>

</body>

</html>

<script>
    res = null;

    function validationc() {

        var cpass = document.getElementById("cpass").value;

        var passw = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/;

        if (passw.test(cpass)) {
            document.getElementById("cpass").style.border = '1px solid green';
            res = "green";
        } else {
            document.getElementById("cpass").style.border = '1px solid red';
            res = "red";
        }


    }

    function validationn() {

        var npass = document.getElementById("npass").value;

        var passw = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/;

        if (passw.test(npass)) {
            document.getElementById("npass").style.border = '1px solid green';
            res = "green";
        } else {
            document.getElementById("npass").style.border = '1px solid red';
            res = "red";
        }
    }

    function submitf(){

        if(res = "green"){
            document.resetform.action = "resetPassword";
        }
        else if(res = "red"){
            alert("Enter strong Password")
        }
    }

</script>