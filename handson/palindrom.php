<!DOCTYPE html>
<html>
<head>
    <style>
        body{
            background-color:#FFBE98;
        }
        div{
            margin:20%;
            background-color:#FEECE2;
            border-radius:10px;
        }
        #button{
            padding:5px;
            background-color:#FFBE98;
            border-radius:5px;
            cursor: pointer;
        }
        p{
            font-size:larger;
        }
    </style>
    <title>Palindrome Checker</title>
</head>
<body>
<div><center><h1>Palindrome Checker</h1>
    <form method="post" action="">
        <label for="inputString">Enter a string:</label>
        <input type="text" name="inputString" id="inputString" required>
        <br><br>
        <input type="submit" value="Check for Palindrome" id="button">
    </form>
</center>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputString = $_POST["inputString"];
        $cleanedString = strtolower(preg_replace("/[^A-Za-z0-9]/", '', $inputString));

        if (strrev($cleanedString) == $cleanedString) {
            echo "<center class='down'><p>Given String is Palindrome</p</center>";
        } else {
            echo "<center class='down'><p>Given String is NOT Palindrome</p></center></div>";
        }
    }
    ?>
</body>
</html>
