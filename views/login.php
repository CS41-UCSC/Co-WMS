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
                <form action="login/run" method="POST">
                    <label for="username" >Username</label>
                    <input type="text" class="input-fields" placeholder="Username" name="user_name">
                    <label for="password" >Password</label>
                    <input type="password" class="input-fields" placeholder="Password" name="password">
                    <input type="submit" value="Login" class="button">
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
</html>