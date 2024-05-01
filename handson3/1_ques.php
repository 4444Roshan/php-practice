<?php
class ShoppingCart
{
    private $items = [];
    private $total = 0;
    public function addItem($itemName, $quantity, $pricePerUnit)
    {   
        
        if ($quantity <= 0 || $pricePerUnit <= 0) {
            echo "<br>Invalid quantity or price per unit. Item not added.<br>";
            return;
        }
        $itemCost = $quantity * $pricePerUnit;
        if (array_key_exists($itemName, $this->items)) {
            $this->items[$itemName] += $quantity;
        } else {
            $this->items[$itemName] = $quantity;
        }
        $this->total += $itemCost;
    }
    public function calculateTotal()
    {
        return $this->total;
    }
    public function displayCart()
    {
        echo "Items in the cart:<br>";
        foreach ($this->items as $itemName => $quantity) {
            echo "$itemName (Qty: $quantity)<br>";
        }
        echo "Total cost: $" . number_format($this->total, 2) . "<br>";
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $item = isset ($_POST['itemname']) ? $_POST['itemname'] : null;
    $quantity = isset ($_POST['quantity']) ? $_POST['quantity'] : null;
    $priceperunit = isset ($_POST['priceperunit']) ? $_POST['priceperunit'] : null;
    $itemname1 = isset ($_POST['itemname1']) ? $_POST['itemname1'] : null;
    $quantity1 = isset ($_POST['quantity1']) ? $_POST['quantity1'] : null;
    $priceperunit1 = isset ($_POST['priceperunit1']) ? $_POST['priceperunit1'] : null;

    $cart = new ShoppingCart();
    if(isset($itemName, $quantity, $pricePerUnit)){
        $cart->addItem($item, $quantity, $priceperunit);
        $cart->addItem($itemname1, $quantity1, $priceperunit1);
        $cart->displayCart();
    }
    else{
        echo"<br>please enter the details<br>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ques 1</title>
</head>

<body>
    <form action="#" method="post">
        Enter details forn1sr item:<br>
        item name:
        <input type="text" name="itemname"><br>
        quantity:
        <input type="number" name="quantity"><br>
        price per unit:
        <input type="number" name="priceperunit" id="">
        Enter details for 2nd item:<br>
        item name :
        <input type="text" name="itemname1"><br>
        quantity:
        <input type="number" name="quantity1"><br>
        price per unit:
        <input type="number" name="priceperunit1">
        <input type="submit" value="submit">
    </form>
</body>

</html>