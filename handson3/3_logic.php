<?php
class Validation {
    public static function validateEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public static function validatePassword($password) {
        return strlen($password) >= 12;
    }

    public static function validateField($field) {
        return !empty($field);
    }
}

$email = isset($_POST['email'])?$_POST['email']:null;
$password = isset($_POST['password'])? $_POST['password']:null;
$field = isset($_POST['field'])?$_POST['field']:null;

if (Validation::validateEmail($email)) {
    echo "Email is valid.<br>";
} else {
    echo "Email is invalid.<br>";
}

if (Validation::validatePassword($password)) {
    echo "Password is valid.<br>";
} else {
    echo "Password is invalid.<br>";
}

if (Validation::validateField($field)) {
    echo "Field is valid.<br>";
} else {
    echo "Field is invalid.<br>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Enter Email,psw,field:<br>
    <form action="" method="post">
    email:
    <input type="email" name="email" id=""><br>
    psw:
    <input type="password" name="password" id=""> <br>
    field:
    <input type="text" name="field" id="">
    <input type="submit" value="submit">
    </form>
</body>
</html>