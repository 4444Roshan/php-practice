<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Categories</title>
    <style>
        body{
            background-color: black;
            color: aliceblue;
        }
    </style>
</head>

<body>
    <form action="#" method="post">
        <label for="category">Select a product category:</label>
        <select name="category" id="category">
            <option value="Motorcycles">Motorcycles</option>
            <option value="Classic Cars">Classic Cars</option>
            <option value="Trucks and Buses">Trucks and Buses</option>
            <option value="Vintage Cars">Vintage Cars</option>
            <option value="Planes">Planes</option>
            <option value="Ships">Ships</option>
            <option value="Trains">Trains</option>
        </select>
        <input type="submit" value="submit">
    </form>
    <?php
    $hostName = "localhost";
    $userName = "root";
    $password = "";
    $databaseName = "Classicstore";
    $conn = new mysqli($hostName, $userName, $password, $databaseName);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    else {
        echo "sql server is connected";
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $selectedCategory = $_POST['category'];

        $sql = "SELECT * FROM Products WHERE ProductLine = '$selectedCategory'";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            echo "<table border='1'>";
            echo "<tr><th>ProductCode</th><th>ProductName</th><th>ProductLine</th><th>ProductScale</th>
            <th>ProductVendor</th><th>ProductDescription</th><th>QuantityInStock</th><th>BuyPrice</th><th>MSRP</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                <td>" . $row["ProductCode"] . "</td>
                <td>" . $row["ProductName"] . "</td>
                <td>" . $row["ProductLine"] . "</td>
                <td>" . $row["ProductScale"] . "</td>
                <td>" . $row["ProductVendor"] . "</td>
                <td>" . $row["ProductDescription"] . "</td>
                <td>" . $row["QuantityInStock"] . "</td>
                <td>" . $row["BuyPrice"] . "</td>
                <td>" . $row["MSRP"] . "</td>
              </tr>";
            }
            echo "</table>";
        } else {
            echo "No records found for category: $selectedCategory";
        }
    }
    $conn->close();
    ?>
</body>

</html>