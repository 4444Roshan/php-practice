<?php
class dbconn {
    private $host;
    private $username;
    private $password;
    private $database;

    public function __construct($host, $username, $password, $database) {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    }
    public function connect() {
        $conn = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        return $conn;
    }
}
class Customer {
    private $conn;

    public function __construct($dbconn) {
        $this->conn = $dbconn;
    }
    public function displayCustomers() {
        $query = "SELECT * FROM customers";
        $result = mysqli_query($this->conn, $query);

        if (mysqli_num_rows($result) > 0) {
            echo "Customers in the records:<br>";
            echo "<table border=2>
            <tr> <th>ID:</th> <th>Name:</th> <th>phone number:</th> </tr>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr> <td>{$row['customerNumber']}</td> <td>{$row['customerName']}</td> <td>{$row['phone']}</td></tr>";   
            }
            echo "</table>";
        } else {
            echo "No customers found.\n";
        }
    }
}
$host = "localhost";
$username = "root";
$password = "";
$database = "Classicstore";

$db = new dbconn($host, $username, $password, $database);
$conn = $db->connect();

$customerObj = new Customer($conn);
$customerObj->displayCustomers();
?>
