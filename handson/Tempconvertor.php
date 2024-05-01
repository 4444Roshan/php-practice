<!DOCTYPE html>
<html>
<head>
    <style>

        body{
            background-color: cornflowerblue ;
        }
        form{
            background-color: whitesmoke;
            margin:0px 20%;
            border-radius: 10px;
        }
        select{
            padding: 5px;
            margin:10px;
        }
        input{
            padding:5px;
            margin:10px;
        }
        #cen2{
            margin: 10% 20%;
            padding: 5%;
            background-color: chocolate;
        }
        tr{
            background-color:cornsilk ;
        }
        th{
            padding:5px;
        }
        td{
            padding:10px;
        }
    </style>
    <title>Temperature Conversion Calculator</title>
</head>
<body>
    <center>
    <h1 style="background-color:aqua; color:white; font-size:50px">Temperature Conversion Calculator</h1>
    <form method="post" action="">
        <label for="from">FROM</label>
        <select name="from" id="from">
            <option value="celsius">Celsius</option>
            <option value="fahrenheit">Fahrenheit</option>
        </select><br><br>
        <label for="to">TO</label>
        <select name="to" id="to">
            <option value="celsius">Celsius</option>
            <option value="fahrenheit">Fahrenheit</option>
        </select><br><br>
        <label for="value">Enter the value to convert</label>
        <input type="text" name="value" id="value" required><br><br>
        <input type="submit" value="Calculate" name="submit">
        <input type="reset" value="Reset"><br><br>
    </form></center>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $value = $_POST["value"];
        $from = $_POST["from"];
        $to = $_POST["to"];
        
        if ($from == "celsius") {
            if ($to == "fahrenheit") {
                $result = ($value * 9/5) + 32;
            }
        } else {
            if ($to == "celsius") {
                $result = ($value - 32) * 5/9;
            }
        }

        echo "<center id='cen2'><table>";
        echo "<tr><th>Value</th><th>From</th><th>To</th><th>Result</th></tr>";
        echo "<tr><td>" . $value . "</td><td>" . $from . "</td><td>" . $to . "</td><td>" . $result . "</td></tr>";
        echo "</table></center>";
    }
    ?>
</body>
</html>