<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .hj{
            background-color:lavender;
            color:white;
            width:50vw;
            margin:auto;
            border-radius:20px;
        }
        h1,h2{
            background-color:yellow;
            color:black;
        }
        
            
    
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area Calculator</title>
</head>
<body>
    <div class="hj">
<center>
<h1>Area Calculator</h1>

<form method="post" action="">
    <label for="shape">Select Shape:</label>
    <select id="shape" name="shape">
        <option value="circle">Circle</option>
        <option value="cylinder">Cylinder</option>
        <option value="square">Square</option>
        <option value="rectangle">Rectangle</option>
    </select><br><br>
    <input type="submit" value="enter">
    <input type="submit" value="clear">
    <br>
    <br>
<center>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $shape = $_POST['shape'];
        
        switch ($shape) {
            case 'circle':
                echo "Radius: <input type='text' name='radius'><br><br>";
                break;
            case 'cylinder':
                echo "Radius: <input type='text' name='radius'><br><br>";
                echo "Height: <input type='text' name='height'><br><br>";
                break;
            case 'square':
                echo "Side: <input type='text' name='side'><br><br>";
                break;
            case 'rectangle':
                echo "Length: <input type='text' name='length'><br><br>";
                echo "Width: <input type='text' name='width'><br><br>";
                break;
        }
    }
    ?>

    <input type="submit" value="Calculate Area">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    switch ($shape) {
        case 'circle':
            $radius = isset($_POST['radius']) && is_numeric($_POST['radius']) ? $_POST['radius']:'';
            $area = !empty($radius) ? pi() * pow($radius, 2) : 'Radius is not set or not a number';
            break;
        case 'cylinder':
            $radius = isset($_POST['radius'])&& is_numeric($_POST['radius']) ? $_POST['radius']:'';
            $height = isset($_POST['height'])&& is_numeric($_POST['height'])? $_POST['height']:'';
            $area = !empty($radius)&&!empty($height)?2 * pi() * $radius * ($radius + $height):'check values';
            break;
        case 'square':
            $side = isset($_POST['side'])&& is_numeric($_POST['side'])? $_POST['side']:0;
            $area = !empty($side)?pow($side, 2):'pls fill side';
            break;
        case 'rectangle':
            $length = isset($_POST['length'])&& is_numeric($_POST['length'])? $_POST['length']:0;
            $width = isset($_POST['width'])&& is_numeric($_POST['width'])? $_POST['width']:0;
            $area = !empty($length)&&!empty($width)?$length * $width:'set parameters';
            break;
    }
    echo "<h2>Area: $area sq units</h2></div>";
}
?>

</body>
</html>