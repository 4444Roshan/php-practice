<!DOCTYPE html>
<html>
<head>
    <style>
        body{
            background-color:pink;
        }
        #button{
            background-color:blue;
            padding:5px;
            color:white;
            border: solid 1px white;
            border-radius:10px;
            cursor: pointer;
        }
        td{
            padding:20px;
        }
        tr:nth-child(even){
            background-color:yellow;
            color:black;
        }
        tr:nth-child(odd){
            background-color:#e1f5fe;
            color:black;
        }
    </style>
    <title>Multiplication Table</title>
</head>
<body>
    <center>
    <h1>Multiplication Table Generator</h1>
    <form method="post" action="">
        <label for="num">Enter the table number</label>
        <input type="number" name="num" id="num" required>
        <label for="num1">Multiple up to </lable>
        <input type="number" name="num1" id="num1" required>
        <input type="submit" value="Display" id="button">
    </form>
    </center>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST["num"];
        $num1 =$_POST["num1"];
        if (is_numeric($num)) {
            echo "<center><h2>Multiplication Table for $num:</h2>";
            echo "<table>";
            for ($i = 1; $i <= $num1; $i++) {
                $result = $num * $i;
                echo "<tr><td>$num x $i</td><td>=</td><td>$result</td></tr></center>";
            }
            echo "</table>";
        } else {
            echo "<center><p>Please enter a valid number.</p></center>";
        }
    }
    ?>
</body>
</html>
