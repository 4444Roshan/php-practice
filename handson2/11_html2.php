<?php
class Customers
{
    private $servername = "localhost";
    private $username = "root"; 
    private $password = "";
    private $dbname = "Classicstore"; 

    private $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function insertData($data)
    {
        $customerNumber=$this->sanitizeInput($data['customerNumber']);
        $customerName = $this->sanitizeInput($data['customerName']);
        $contactLastName = $this->sanitizeInput($data['contactLastName']);
        $contactFirstName = $this->sanitizeInput($data['contactFirstName']);
        $phone = $this->sanitizeInput($data['phone']);
        $addressLine1 = $this->sanitizeInput($data['addressLine1']);
        $addressLine2 = $this->sanitizeInput($data['addressLine2']);
        $city = $this->sanitizeInput($data['city']);
        $state = $this->sanitizeInput($data['state']);
        $postalCode = $this->sanitizeInput($data['postalCode']);
        $country = $this->sanitizeInput($data['country']);
        $salesRepEmployeeNumber = (int) $data['salesRepEmployeeNumber'];
        $creditLimit = (float) $data['creditLimit'];

        $sql = "INSERT INTO Customers (customerNumber, customerName, contactLastName, contactFirstName, phone, addressLine1, addressLine2, city, state, postalCode, country, salesRepEmployeeNumber, creditLimit)
                VALUES ('$customerNumber', '$customerName', '$contactLastName', '$contactFirstName', '$phone', '$addressLine1', '$addressLine2', '$city', '$state', '$postalCode', '$country', $salesRepEmployeeNumber, $creditLimit)";

        if ($this->conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }

    private function sanitizeInput($input)
    {
        // Implement your input sanitization logic here (e.g., trim, escape, etc.)
        return $this->conn->real_escape_string($input);
    }

    public function closeConnection()
    {
        // Close the connection
        $this->conn->close();
    }
}

if (isset($_POST['submit'])) {
    $customerObj = new Customers();
    $customerObj->insertData($_POST);
    $customerObj->closeConnection();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Customer Record</title>
    <style>
        body{
            background-color: brown;
            color:  aliceblue ;
        }
        
        h1,form{
            text-align: center;
            margin: auto;
        }
        hr{
            height:4px;
            background-color: whitesmoke;
        }
        label{
            padding: 20px;
        }
    </style>
</head>
<body>
    <h1>Add Customer Record</h1>
    <hr>
    <form action="" method="post">
        <label for="customerNumber">Customer Number</label>
        <input type="number" id="customerNumber" name="customerNumber" required><br><br>
        <label for="customerName">Customer Name</label>
        <input type="text" id="customerName" name="customerName" required><br><br>
        <label for="contactLastName">contactLastName</label>
        <input type="text" id="contactLastName" name="contactLastName" required><br><br>
        <label for="contactFirstName">contactFirstName</label>
        <input type="text" id="contactFirstName" name="contactFirstName" required><br><br>
        <label for="phone">phone</label>
        <input type="tel" id="phone" name="phone" required><br><br>
        <label for="addressLine1">addressLine1</label>
        <input type="text" id="addressLine1" name="addressLine1" required><br><br>
        <label for="addressLine2">addressLine2</label>
        <input type="text" id="addressLine2" name="addressLine2" ><br><br>
        <label for="city">city</label>
        <input type="text" id="city" name="city" required><br><br>
        <label for="state">state</label>
        <input type="text" id="state" name="state" required><br><br>
        <label for="postalCode">postalCode</label>
        <input type="number" id="postalCode" name="postalCode" required><br><br>
        <label for="country">country</label>
        <input type="text" id="country" name="country" required><br><br>
        <label for="salesRepEmployeeNumber">salesRepEmployeeNumber</label>
        <input type="number" id="salesRepEmployeeNumber" name="salesRepEmployeeNumber" required><br><br>
        <label for="creditLimit">creditLimit</label>
        <input type="number" id="creditLimit" name="creditLimit" required><br><br>
        <input type="submit" name="submit" value="Add Record">
    </form>
</body>
</html>
