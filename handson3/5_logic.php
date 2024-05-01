<?php
class Product
{
    private $name;
    private $price;
    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
    public function __toString()
    {
        return "{$this->name} (" . number_format($this->price, 2) . " Rs.)";
    }
    public function compareTo($other)
    {
        if ($other instanceof Product) {
            if ($this->price < $other->price) {
                return -1;
            } elseif ($this->price > $other->price) {
                return 1;
            } else {
                return 0;
            }
        } else {
            throw new Exception("Comparison object must be a Product<br>or Create an another object for comparision<br>");
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>enter details product name and price</h1>
    <form action="" method="post">
        First Product:<br>
        <label for="name">Enter the product name:</label>
        <input type="text" value="name" name="name">
        <label for="price">Enter the product price:</label>
        <input type="number" value="price" name="price"><br><br>
        Second Product: <br>
        <label for="name1">Enter the product name:</label>
        <input type="text" value="name" name="name1">
        <label for="price1">Enter the product price:</label>
        <input type="number" value="price" name="price1"><br><br>
        <input type="submit" value="submit">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $cost = $_POST['price'];
        $name1 = isset ($_POST['name1']) ? $_POST['name1'] : "product 2";
        $cost1 = isset ($_POST['price1']) ? $_POST['price1'] : 0;
        $product1 = new Product($name, $cost);
        $product2 = new Product($name1, $cost1);
        $result = $product1->compareTo($product2);
        if ($result < 0) {
            echo "<br>{$product1} is cheaper than {$product2}<br>";
        } elseif ($result > 0) {
            echo "<br>{$product1} is more expensive than {$product2}<br>";
        } else {
            echo "<br>{$product1} and {$product2} have the same price<br>";
        }
    }
    ?>
</body>

</html>