<?php
$servername = "localhost";
$username = "root"; 
$password = "";
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "CREATE DATABASE Classicstore";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully<br>";
} else {
    echo "Error creating database: " . $conn->error;
}
$conn->close();
echo "<h2>List of Databases:</h2>";
echo "<table border='1'>";
echo "<tr><th>Database Name</th></tr>";
$conn = new mysqli($servername, $username, $password);
$query = "SHOW DATABASES";
$result = $conn->query($query); 
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row['Database'] . "</td></tr>";
    }
} else {
    echo "<tr><td>No databases found</td></tr>";
}
echo "</table>";
$conn->close();
?>
