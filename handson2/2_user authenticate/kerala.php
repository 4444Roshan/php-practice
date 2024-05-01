
<?php
session_start();
if(!isset($_SESSION['loggedin'])){
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            text-align: center;
            margin: auto;
        }
        p{
            margin:0% 20%;
        }
    </style>
</head>

<body>
    <h1>Incredible Kerala</h1>
    <p>Kerala, a state on India's tropical Malabar Coast, has nearly 600km of Arabian Sea shoreline. It's known for its
        palm-lined beaches and backwaters, a network of canals. Inland are the Western Ghats, mountains whose slopes
        support tea, coffee and spice plantations as well as wildlife. National parks like Eravikulam and Periyar, plus
        Wayanad and other sanctuaries, are home to elephants, langur monkeys and tigers.</p>
</body>

</html>