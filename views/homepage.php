<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Co-WMS/style/homepage_style.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <title>Document</title>
</head>

<body class="preload" id="backdrop">
    <header class="header">   
        <img src="../Co-WMS/Asserts/logo.jpg" alt="" class="open-img">
        <label for="" class="date"> <?php 
                                        $day;
                                        if(date("d") == 1){
                                            $day = "st ";
                                        }elseif(date("d") == 2){
                                            $day = "nd ";
                                        }elseif(date("d") == 3){
                                            $day = "rd ";
                                        }else{
                                            $day = "th ";
                                        }

                                        echo "Today, " . date("d") . $day .date("M") . " " . date("Y") . "<br>"; 
                                        
                                    ?>
        </label>
        <a href="login" class="nav-link">
            <i class="fa fa-user fa-lg"><span>Log In</span></i>
        </a>
        
    </header>

    <main >
        <div class="container" id="container">
            
            <div class="item1">
                <label for="">Welcome to <span>CO-WMS</span> <br>
                    Workflow Management System <br>
                    of ABC IT 
                </label>     
            </div>
            <div class="item2">
                <div class="card1"><i class="fa fa-location-arrow"></i>Location <br> ABC IT No XX, ReidCon Avenue, Colombo </div> 
                <div class="card2"><i class="fa fa-phone "></i>Contact <br> +94 11 2355789 </div>
                <div class="card3"><i class="fa fa-envelope "></i>Email <br> officialmail@abcit.com</div>
            </div>
        </div>
        
    </main>

        
    <script>
        
        

    </script>

    
</body>
</html>