<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Classicstore";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE Products (
    ProductCode VARCHAR(15) PRIMARY KEY,
    ProductName VARCHAR(70),
    ProductLine VARCHAR(50),
    ProductScale VARCHAR(10),
    ProductVendor VARCHAR(50),
    ProductDescription TEXT,
    QuantityInStock SMALLINT,
    BuyPrice DOUBLE,
    MSRP DOUBLE
)";

if ($conn->query($sql) === TRUE) {
    echo "Table 'Products' created successfully<br>";
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
