<?php
$fontName = isset($_COOKIE['font_name']) ? $_COOKIE['font_name'] : 'Arial, Helvetica, sans-serif';
$fontColor = isset($_COOKIE['font_color']) ? $_COOKIE['font_color'] : '#000000';
$unit = isset($_COOKIE['unit_area']) ? $_COOKIE['unit_area'] : 'sqm';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
            text-align: center;
            background-color: bisque;
            color: black;
            font-family: <?php $fontFamily?>;
        }
        form{
            border: solid 2px;
            margin:0px 25%;
            padding: 3%;
            background-color: brown;
            color: whitesmoke;
            border-radius: 10px;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Price Calculator</h1>
    <form action="" method="post">
    Select City : <select name="city" id="city">
            <option value="Chennai">Chennai</option>
            <option value="Hyderabad">Hyderabad</option>
            <option value="Banglore">Banglore</option>
            <option value="Delhi">Delhi</option>
        </select><br><br>

    <label for="price">Price Per <?php echo $unit ?> : </label>
        <input type="text" name="price" id="price"> <br><br>
        <label for="num">Number of <?php echo $unit ?>: </label>
        <input type="text" name="num" id="num"> <br><br>
        <input type="submit" value="calculate" name="calculate"><br>
    </form>
    <?php
    if (isset($_POST['calculate'])) {
        if (isset($_POST['price']) && isset($_POST['num'])) {
            $p = $_POST['price'];
            $n = $_POST['num'];
            $b = $p * $n;
            echo "<br><h1>Total value : $b</h1>";
        }
    }
    ?>
</body>
</html>

