<!DOCTYPE html>
<html>
<head>
    <title>about place</title>
    <style>
        h1{
            text-align: center;
            margin:auto;
            padding: 20px;
            background-color: skyblue;
        }
        ul{
            text-align: center;
            margin: auto;
            background-color: #378CE7;
            color:#DFF5FF;
        }
        li{
            display: inline-flex;
            text-align: center;
            margin: auto;
            padding: 20px;
        }
        p{
            text-align: center;
            background-color: #67C6E3;
            margin: 1% 20%;
            padding: 20px;
            padding-inline: 20px;
        }
    </style>
</head>
<body>
    <h1>About visiting place</h1>
    
    <form method="post" action="<?php $fptr?>">
        <ul> 
            <li><input type="submit" name="place" value="none" hidden></li>
            <li><input type="submit" name="place" value="kerala"></li>
            <li><input type="submit" name="place" value="Ooty"></li>
            <li><input type="submit" name="place" value="chhattisgarh"></li>
            <li><input type="submit" name="place" value="odisha"></li>
        </ul>
    </form>
    <?php 
    $place = isset($_POST['place']) ? $_POST['place'] : 'none';
    $fname = $place . ".txt";
    $fptr = fopen($fname,"r");
    $content = fread($fptr,filesize($fname));
        echo "<div><h1>".$place."</h1>";
        echo "<p>".$content."</p></div>";
?> 
</body>
</html>




