<?php
session_start();
if(isset($_POST['username']) && isset($_POST['password'])){
    if($_POST['username'] === 'roshan' && $_POST['password'] === 'roshan@12345'){
        $_SESSION['loggedin'] = true;
        header('Location: home.php');
        exit;
    } else {
        $error = "Invalid username or password!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login page</title>
            <style>
        body{
            text-align: center;
            margin: auto;
        }
        form{
            margin:0% 20%;
            background-color: black;
            color:white;
            padding: 5%;
        }

    </style>
</head>
<body>
    <h1>welcome to tours services India</h1>
    <form method="post" action="login.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username"><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <input type="submit" value="Login">
    </form>
    <?php if(isset($error)): ?>
        <p><?php echo $error; ?></p>
    <?php endif; ?>
</body>
</html>
