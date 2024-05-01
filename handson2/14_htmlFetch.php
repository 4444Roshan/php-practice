<?php   
echo "we are on server";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Classicstore";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM products";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>productCode</th>
                <th>productName</th>
                <th>productLine</th>
                <th>productScale</th>
                <th>productVendor</th>
                <th>productDescription</th>
                <th>quantityInStock</th>
                <th>buyPrice</th>
                <th>MSRP</th>
            </tr>";
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
    echo "No records found.";
}

$conn->close();
?>
