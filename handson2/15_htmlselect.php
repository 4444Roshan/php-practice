<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Data</title>
    <style>
        body{
            background-color: black;
            color: aliceblue;
        }
    </style>
</head>
<body>
    <?php
    $hostName = "localhost";
    $userName = "root";
    $password = "";
    $databaseName = "Classicstore"; 
    $conn = new mysqli($hostName, $userName, $password, $databaseName);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SHOW COLUMNS FROM Products";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<form action=\"\" method=\"post\">";
        while ($row = $result->fetch_assoc()) {
            $columnName = $row["Field"];
            echo "<label><input type=\"checkbox\" name=\"columns[]\" value=\"$columnName\"> $columnName</label><br>";
        }
        echo "<input type=\"submit\" value=\"Show Products\">";
        echo "</form>";
    } else {
        echo "No columns found in the table.";
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["columns"])) {
        $selectedColumns = $_POST["columns"];
        $columnsString = implode(", ", $selectedColumns);
        $sql = "SELECT $columnsString FROM Products";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table border='1'>";
            echo "<tr>";
            foreach ($selectedColumns as $column) {
                echo "<th>$column</th>";
            }
            echo "</tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                foreach ($selectedColumns as $column) {
                    echo "<td>" . $row[$column] . "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "No records found.";
        }
    }
    $conn->close();
    ?>
</body>
</html>
