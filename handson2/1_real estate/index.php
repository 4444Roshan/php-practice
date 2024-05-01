<?php
if(isset($_COOKIE['font_name']) && isset($_COOKIE['font_color'])) {
    $fontName = $_COOKIE['font_name'];
    $fontColor = $_COOKIE['font_color'];
    echo " <style>
    body{
    color:$fontColor;
    font-family:$fontName ;
    }
    </style>";
}else{
    $fontName = 'ui-sans-serif';
    $fontColor = 'black';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Estate</title>
    <style>
        body{
            text-align: center;
        }
        #fo{
    margin:0% 20%;
}
#fo1{
    text-align: right;
}
    </style>
</head>

<body>
    <div id="fo1">
    <form action=""  method="post">
    <label for="font_name">Select Font:</label>
        <select name="font_name" id="font_name">
            <option value="ui-sans-serif">ui-sans-serif</option>
            <option value="cursive">cursive</option>
            <option value="fantasy">fantasy</option>
        </select>
    <label for="font_color">Select Text Color:</label>
    <input type="color" name="font_color" id="font_color">
    <br><br>
    <input type="submit" value="My peference Setting"></div>
    </form>
    
    <?php
     
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST["font_name"]) && isset($_POST["font_color"]) ){
    $fontName = $_POST['font_name'];
    $fontColor = $_POST['font_color'];
    setcookie('font_name', $fontName, time() + (86400 * 30), "/");
    setcookie('font_color', $fontColor, time() + (86400 * 30), "/");  
}
}
  ?>
    <h1>Indiabulls Real Estate Ltd.</h1>
    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates fugit, aliquid enim quos ad dolores dicta et
        cupiditate culpa nam aperiam corporis nisi perferendis recusandae, doloribus exercitationem soluta. Officia,
        reprehenderit? Quis, modi aperiam reprehenderit nobis iste odit beatae nisi porro dolorem, deleniti, error fugit
        quas ducimus dolor! Animi, obcaecati perferendis.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur culpa dolorem facilis, rem aliquid tempora!
        Temporibus ullam et minima distinctio illum aliquam! Ipsam atque fugit consequatur deleniti amet? Accusantium
        ullam cupiditate voluptate, optio excepturi iste, explicabo hic nemo fuga earum, eaque praesentium qui autem
        perferendis iure unde quibusdam incidunt libero nostrum. Autem eos illum laudantium corporis quaerat soluta
        architecto repellat cum. Saepe excepturi, voluptatibus, amet voluptas impedit alias illum itaque optio
        aspernatur, possimus ipsam. Blanditiis porro, recusandae similique officiis reprehenderit omnis. Voluptatum
        voluptas unde id odio, eum doloremque sed cupiditate quasi repellendus dolorem saepe quidem rerum nam ex ratione
        totam?</p>
    <h2>Area Convertion calculator</h2>
    <div id="fo" style="border:solid;">
    <form action="#" method="post">
        <label for="input">Enter Area:</label>
        <input type="number" name="input" id="input" required>
        <select name="unit_area" id="unit">
            <option value="Acres">Acres</option>
            <option value="Sqft">sqft</option>
            <option value="sqm">sqm</option>
            <option value="hectare">hectare</option>
        </select>
        <input type="submit" value="Calculate" name="Convert">
        </form> 
    </div>
    <?php
   
    
    if(isset($_POST['unit_area']) && isset($_POST['input'])) {
        $unit = $_POST['unit_area'];
        setcookie('unit_area', $unit, time() + (86400 * 30), "/");  
       
    
    if($unit) {
        $unit = $_COOKIE['unit_area'];
    
        $b=$_POST['input'];
        $a=$_POST['unit_area'];
            if($a=="Acres"){
                $hectares = $b * 0.404686;
                $sqft = $b * 43560.06;
                $sqm = $b * 4046.86;
                echo "$b $a is $sqft sqft<br>"; 
                echo "$b $a is $sqm sqm<br>";
                echo "$b $a is $hectares hectares<br>";
            }
            if($a=="Sqft"){
                $acres = $b / 43560.06;
                $sqm = $b / 10.7639;
                $hectares = $b / 107639;
                echo "$b $a is $acres acres<br>"; 
                echo "$b $a is $sqm sqm<br>";
                echo "$b $a is $hectares hectares<br>";
            }
            if($a=="sqm"){
                $acres = $b * 0.000247105;
                $sqft = $b * 10.7639;
                $hectares = $b / 10000;
                echo "$b $a is $acres acres<br>"; 
                echo "$b $a is $sqft sqft<br>";
                echo "$b $a is $hectares hectares<br>";
            }
            if($a=="hectare"){
                $acres = $b * 2.47105;
                $sqft = $b * 107639;
                $sqm = $b * 10000;
                echo "$b $a is $acres acres<br>"; 
                echo "$b $a is $sqft sqft<br>";
                echo "$b $a is $sqm sqm<br>";
            }
        }
    }
    ?>
    <button type="button"><a href="page2.php" >navigator</a></button>
</body>
</html>
