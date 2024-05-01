<!DOCTYPE html>
<html>
<head><style>
        body {
            font-family: Arial, sans-serif;
            background-color: grey;
        }
        h1 {
            color: white;
            text-align: center;
        }
        div{
            margin:17%;
        }
        form {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
        input[type="number"] {
            width: 95%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        p {
            text-align: center;
            font-size: 18px;
            color: white;
        }
    </style>
    <title>Factorial Calculator</title>
</head>
<body>
    <div><center><h1>Factorial Calculator</h1>
    <form method="post" action="">
        <label for="number">Enter a positive integer:</label>
        <input type="number" name="number" id="number" required><br>
        <input type="submit" value="Calculate" style="margin-top: 10px;">
    </form>
</center>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputNumber = $_POST["number"];

        // Validate input (ensure it's a positive integer)
        if (is_numeric($inputNumber) && $inputNumber >= 0 && floor($inputNumber) == $inputNumber) {
            $factorial = fact($inputNumber);
            echo "<center><p>Factorial of $inputNumber = $factorial</p></center>";
        } else {
            echo "<center><p>Please enter a valid positive integer.</p></center></div>";
        }
    }

    // User-defined function to calculate factorial
    function fact($num) {
        if ($num == 0 || $num == 1) {
            return 1;
        } else {
            return $num * fact($num - 1);
        }
    }
    ?>
</body>
</html>
