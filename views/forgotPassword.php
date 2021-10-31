<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/forgotPassword_style.css?<?php echo time(); ?>" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="left">
            <div class="form">

                <h1>Forgot <span>Password</span></h1>

                <form method="POST" action="sendOTP">
                    <label for="Email" class="username">Username</label><br>
                    <input type="username" class="input" name="username"><br>
                    <!-- <label for="Email" class="email">Email</label><br>
                    <input type="username" class="input" name="email"><br> -->
                    <input type="submit" value="Send" class="button">
                    <h4>Or</h4>

                    <div class="link">
                        <h4>Back to <a href="http://localhost/Co-WMS/login">Login</a></h4>
                    </div>
                </form>

            </div>

        </div>
        <div class="right">
            <!-- <div class="text1">
                <h1>Do you not Remember the Password?</h1>
            </div>
            <div class="text2">
                <h1>No Problem !!! Enter your Email and Username. We will send you an Email with instruction to reset your password......</h1>
            </div> -->
            <img src="../Asserts/Forgot_password.png" class="image">

        </div>
    </div>

</body>

</html>