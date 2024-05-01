<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Classicstore";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "CREATE TABLE Customers (
    customerNumber INT(11) NOT NULL PRIMARY KEY,
    customerName VARCHAR(50) NOT NULL,
    contactLastName VARCHAR(50) NOT NULL,
    contactFirstName VARCHAR(50) NOT NULL,
    phone VARCHAR(50) NOT NULL,
    addressLine1 VARCHAR(50) NOT NULL,
    addressLine2 VARCHAR(50) DEFAULT NULL,
    city VARCHAR(50) NOT NULL,
    state VARCHAR(50) DEFAULT NULL,
    postalCode VARCHAR(15) DEFAULT NULL,
    country VARCHAR(50) NOT NULL,
    salesRepEmployeeNumber INT(11) DEFAULT NULL,
    creditLimit DOUBLE DEFAULT NULL
)";
if ($conn->query($sql) === TRUE) {
    echo "Table 'Customers' created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}
$tables_query = "SHOW TABLES";
$tables_result = $conn->query($tables_query);
if ($tables_result->num_rows > 0) {
    echo "<h2>List of Tables:</h2>";
    echo "<ul>";
    while ($row = $tables_result->fetch_row()) {
        echo "<li>" . $row[0] . "</li>";
    }
    echo "</ul>";
} else {
    echo "No tables found in the database.";
}
$conn->close();
?>
