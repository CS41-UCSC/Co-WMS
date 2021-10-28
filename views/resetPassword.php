<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Co-WMS/style/resetPassword_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="left">
            <div class="form">
                <h1>Change <span>Password</span></h1>

                <form method="POST" action="resetPassword">
                    <div class="box">
                        <label for="Email" class="verifi" >Verification Code</label><br>
                        <input type="text" class="input" name="otpcode"><br>
                        <label for="Email" class="new_pass" >New Password</label><br>
                        <input type="password" class="input" name="npassword"><br>
                        <label for="Email" class="confirm_pass" >Confirm New Password</label><br>
                        <input type="password" class="input" name="cpassword"><br>
                    </div>
                   
                    <input type="submit" value="Change My Password" class="button">
                    
                </form>

            </div>

        </div>
        <div class="right">
            <div class="text1">
                <h1>You Can Chanage The Password To Your Liking....</h1>
            </div>
            <div class="text2">
                <h1>Password must have : </h1>
                <ul>
                    <li>Minimum 8 characters</li>
                    <li>English uppercase/lowercase letters</li>
                    <li>Numerals and Symbols</li>
                </ul>
            </div>

        </div>
    </div>
    
</body>
</html>