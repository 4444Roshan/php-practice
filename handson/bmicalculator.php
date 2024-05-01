<!DOCTYPE html>
<html>
<head>
    <title>BMI Calculator</title>
    <style>
        body{
            background-color: #659cd3;
        }
        h1{
            border-radius:10px; 
        }
        th{
            background-color: grey;
            color:white;
            padding: 10px;
        }
        td{
            background: linear-gradient(#627bc2, #236976);
            color:white;
            padding:10px;
        }
        .btn{
            border-radius:10px;
            padding:10px;
        }
        table{
            border-collapse:none;
        }
        input{
            border:2px yellow;
            cursor:pointer;
        }
    </style>
</head>
<body>
    <center><h1 style="background-color:aqua; color:white; font-size:50px">BMI Calculator</h1>
    <form method="post" action="">
        <label for="height">Enter your height:</label>
        <select name="heightUnit" id="heightUnit">
            <option value="cm">Centimeters</option>
            <option value="inch">Inches</option>
        </select>
        <input class="btn" type="text" name="height" id="height" required><br><br>
        <label for="weight">Enter your weight:</label>
        <input type="radio" name="weightUnit" id="kg" value="kg" required>
        <label for="kg">Kilograms</label>
        <input type="radio" name="weightUnit" id="lbs" value="lbs" required>
        <label for="lbs">Pounds</label>
        <input class="btn" type="text" name="weight" id="weight" required><br><br>
        <input class="btn" type="submit" value="Calculate" name="submit">
        <input class="btn" type="reset" value="Reset">
        <br>
        <br>
    </form></center>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $height = $_POST["height"];
        $weight = $_POST["weight"];
        $heightUnit = $_POST["heightUnit"];
        $weightUnit = $_POST["weightUnit"];

        if ($weightUnit == "kg") {
            $weight = $weight * 2.20462; //pound
        }

        if ($heightUnit == "cm") {
            $height = $height * 0.39370079;  // inches
        }

        $bmi =703*($weight / ($height * $height));

        echo "<center><table>";
        echo "<tr><th>BMI Score</th><th>Category</th><th>Suggestion Steps</th></tr>";

        if ($bmi < 18.6) {
            echo "<tr><td>" . $bmi . "</td><td>Underweight</td><td>Consult a doctor or a dietitian to develop a healthy eating plan and gain weight in a safe and sustainable way</td></tr>";
        } elseif ($bmi >= 18.6 && $bmi <= 24.9) {
            echo "<tr><td>" . $bmi . "</td><td>Normal</td><td>Maintaining a balanced diet and engaging in regular physical activity are key to staying healthy and preventing weight-related health issues</td></tr>";
        } elseif ($bmi > 24.9 && $bmi <= 29.9) {
            echo "<tr><td>" . $bmi . "</td><td>Overweight</td><td>Reducing your calorie intake and increasing your physical activity levels can help you achieve a healthy weight and reduce the risk of health problems</td></tr>";
        } else {
            echo "<tr><td>" . $bmi . "</td><td>Obese</td><td>It is important to consult a doctor or a dietitian to develop a weight loss plan that includes diet modifications, physical activity, and possibly medication or surgery to reduce health risks associated with obesity</td></tr>";
        }
        echo "</table></center>";
    }
    ?>
</body>
</html>