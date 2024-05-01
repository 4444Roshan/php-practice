<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        body {
            background-color: #c8e6c9;
        }

        header {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
            margin: auto;;
            border-radius: 50%;
            width: 60%;
            height:30vh;
            font-size: 20px;;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            margin-bottom: 1rem;
        }

        textarea {
            resize: none;
            margin-bottom: 1rem;
        }

        input[type="submit"] {
            margin: 0.5rem;
            cursor: pointer;
            border-radius: 15%;
        }

        .result {
            margin: 2rem 0;
        }
    </style>
    <title>String Converter</title>
</head>

<body>
    <header
        style="background-color:#265073; color:white; text-align:center; font-size:100px;">
        String Converter</header>
    <form action="" method="post">
        <center><label for="string" style="font-size:30px;">Enter sentence</label><br>
            <textarea name="string" id="input" cols="100" rows="5" required></textarea>
            <br><br>
            <input type="submit" name="convert" value="UpperCase"
                style=" background-color:#F1FADA; color:black; font-size:20px;">
            <input type="submit" name="convert" value="lowerCase"
                style=" background-color:#F1FADA; color:black; font-size:20px;">
            <input type="submit" name="convert" value="Capital_Each_Word"
                style=" background-color:#F1FADA; color:black; font-size:20px;">
            <input type="submit" name="convert" value="Capital_Sentence"
                style=" background-color:#F1FADA; color:black; font-size:20px;">
            <input type="submit" name="convert" value="Clear"
                style=" background-color:#F1FADA; color:black; font-size:20px;">
        </center>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputSentence = $_POST["string"];
        $conversionType = $_POST["convert"];

        switch ($conversionType) {
            case "UpperCase":
                echo "<br><center>Converted Sentence:.UPPERCASE</center><br>";
                echo "<center><textarea cols='100' rows='3'>" . strtoupper($inputSentence) . "</textarea></center>";
                break;
            case "lowerCase":
                echo "<br><center>Converted Sentence:.lowerCase</center><br>";
                echo "<center><textarea cols='100' rows='3'>" . strtolower($inputSentence) . "</textarea></center>";
                break;
            case "Capital_Each_Word":
                echo "<br><center>Converted Sentence:.Capital_Each_Word</center><br>";
                echo "<center><br><textarea cols='100' rows='3'> " . ucwords(strtolower($inputSentence)) . "</textarea></center>";
                break;
            case "Capital_Sentence":
                echo "<br><center>Converted Sentence:.Capital_Sentence</center><br>";
                echo "<center><textarea cols='100' rows='3'>" . ucfirst(strtolower($inputSentence)) . "</textarea></center>";
                break;
            case "Clear":
                echo "<br><center>Converted Sentence:.Clear</center><br>";
                break;
            default:
                echo "<br><center><textarea cols='100' rows='3'>Please select a valid conversion option.</textarea></center>";
        }
    }

    ?>
</body>

</html>