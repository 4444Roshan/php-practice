<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "Classicstore";
$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
    die ("Connection failed: " . mysqli_connect_error());
}

function createCustomer($id, $name,$LastName,$FirstName, $number,$addressLine1,$addressLine2,$city,$state,$postalCode,$country,$salesRepEmployeeNumber,$creditLimit)
{
    global $conn;
    $sql = "INSERT INTO customers (customerNumber, customerName, contactLastName, contactFirstName, phone, addressLine1, addressLine2, city, state, postalCode, country, salesRepEmployeeNumber, creditLimit) 
    VALUES ('$id','$name','$LastName', '$FirstName','$number','$addressLine1','$addressLine2','$city','$state','$postalCode','$country','$salesRepEmployeeNumber','$creditLimit')";
    if (mysqli_query($conn, $sql)) {
        echo "New customer created successfully!<br>";
    } else {
        echo "Error creating customer: " . mysqli_error($conn) . "<br>";
    }
}
function readCustomers()
{
    global $conn;
    $sql = "SELECT * FROM customers";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "ID: {$row['customerNumber']}, Name: {$row['customerName']}, Phone number: {$row['phone']}<br>";
        }
    } else {
        echo "No customers found.<br>";
    }
}
function updateCustomerEmail($id, $number)
{
    global $conn;
    $sql = "UPDATE customers SET phone = '$number' WHERE customerNumber = $id";
    if (mysqli_query($conn, $sql)) {
        echo "Customer phone number updated successfully!<br>";
    } else {
        echo "Error updating customer phone number: " . mysqli_error($conn) . "<br>";
    }
}
function deleteCustomer($id)
{
    global $conn;
    $sql = "DELETE FROM customers WHERE customerNumber = $id";
    if (mysqli_query($conn, $sql)) {
        echo "Customer deleted successfully!<br>";
    } else {
        echo "Error deleting customer: " . mysqli_error($conn) . "<br>";
    }
}
echo "customerNumber, customerName, contactLastName, contactFirstName, phone, addressLine1, addressLine2, city, state, postalCode, country, salesRepEmployeeNumber, creditLimit";
createCustomer("1", "John","doe","first", "9711294954","new york","street-2nd","city york","york","20113","usa","231","56789");
readCustomers();
updateCustomerEmail(1, "9711496354");
readCustomers();
deleteCustomer(1);
readCustomers();
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>