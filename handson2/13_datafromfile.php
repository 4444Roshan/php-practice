<?php
$myfile =fopen("data_products.txt" ,"r") or die("Unable to open file!");
$var_insert=fread($myfile, filesize("data_products.txt"));
fclose($myfile);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Classicstore";
$conn = new mysqli($servername,$username,$password,$dbname);
if($conn-> connect_error){
    die("connection failed : ". $conn->connect_error);
}else{
    echo "db connection established <br>";
}
if($conn-> query($var_insert)== true){
    echo "record inserted";
}
else{
    echo "record not inserted";
}
$conn->close();
?>
