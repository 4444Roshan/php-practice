<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Customer Record</title>
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
    }?>
    <form action="" method="post">
    <label for="customer_id">Enter Customer ID:</label>
    <input type="number" id="customer_id" name="customerNumber" required>
    <input type="submit" value="Delete Customer">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["customerNumber"])) {
        $customerID = $_POST["customerNumber"];
        $sql = "DELETE FROM customers WHERE customerNumber = $customerID";
        //$stmt = $conn->prepare($sql);
        //$stmt->bind_param("i", $customerID);
        //$res = $stmt->execute()
        if ($conn->query($sql)) {
            echo "Record with Customer ID $customerID deleted successfully.";
        } else {
            echo "Error deleting record. Please check the Customer ID.";
        }

        //$stmt->close();
        $conn->close();
    }
    ?>
   
</body>
</html>
