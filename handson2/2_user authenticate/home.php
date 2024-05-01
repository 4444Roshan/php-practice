<?php
session_start();
if(!isset($_SESSION['loggedin'])){
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>landing page</title>
    <style>
        body{
            margin: 0px;
            padding: 0px;
            /* background-image: url(https://images.unsplash.com/photo-1469854523086-cc02fe5d8800?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8Mnx8fGVufDB8fHx8fA%3D%3D);
            background-repeat: no-repeat ;
            background-size: cover ; */
            background-color: bisque;
        }
        h1,h3{
            text-align: center;
            margin: auto;
            padding: 3%;
        }
        div{
            margin:0% 35%;
            display: inline-flex;
            text-align: center;
            background-color: burlywood;
        }
        a{
            padding:2%;
            margin: auto;
        }
    </style>
</head>
<body>
    <h1>Welcome to tour Pack services</h1>
    <h3>Tour Package Services for Customers</h3>
    <div>
    <a href="kerala.php"> Incredible Kerala</a><br>
    <a href="ooty.php"> Ooty Queen of Hills</a><br>
    <a href="temple.php"> Temple Town</a><br>
    <a href="login.php">Logout</a><br>
    </div>
    
</body>
</html>
