<!DOCTYPE html>
<html>
<head>
    <style>
        body{
            background-color:#000000 ;
            color:#ffffff;
        }
        h1{
            background-color:#40679E;
            color:white;
            font-size:50px;
        }
        .right{
            display: inline-flex;
            margin:5%;
       }
        .even{
            background-color: grey;
        }
        .odd{
            background-color: aqua;
        }
        table{
            margin-left: 10%;
        }
        td{
            padding:20px;
        }
        input{
            background-color:#0B60B0 ;
            border-radius: 5px;
            cursor: pointer;
            padding:20px;
            color:white;
            font:large;
        }
    </style>
    <title>Shorting Name and Allocate Serial Number</title>
</head>
<body>
    <center><h1>Shorting Name and Allocate Serial Number</h1></center>
    <div class="right"> <form method="post" action="">
        <label for="names">Enter list names separated by comma</label><br>
        <textarea type="text" name="names" id="names" rows="4" cols="50" required></textarea>
        <br>
        <br>
        <input type="submit" value="Generate Serial Number">
        <input type="submit" value="Clear">
    </form></div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputNames = $_POST["names"];
        $namesArray = explode(",", $inputNames);
        $sortedNames = array_map('trim', $namesArray); 
        sort($sortedNames);
        $serialNumber = 1001;
        $rowColor = 'odd';
        echo "<div class='right'><table>";
        echo "<tr><th>s.no</th><th>Name</th><tr>";
        foreach ($sortedNames as $name) {
            echo "<tr class='$rowColor'><td>$serialNumber"."</td><td>". $name."</td></tr><br>";
            $serialNumber++;
            if($rowColor == 'odd') {
                $rowColor = 'even';
            } else {
                $rowColor = 'odd';
            }
        }
        echo "</table><div>";
    }
    ?>
</body>
</html>
