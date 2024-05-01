<?php 
include 'pricelist.php';
session_start();
if(isset($_SESSION['cart'])){
    $cart = $_SESSION['cart'];
}else{
    $cart = array();
}
?>
    
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>selecting items</title>
        <style>
            body{
                background-color: palevioletred;
            }
            hr{
                height: 3px;
                background-color: whitesmoke;
            }
            h1{
                text-align: center;
                margin: auto;
            }
            form{
                text-align: center;
                margin: auto;
                padding: 3%;
            }
            input{
                border-radius: 5px;
            }
            label{
                padding: 2%;
            }
            h3{
                color: whitesmoke;
            }
        </style>
    </head>
    
    <body>
        <h1>List to have product</h1>
        <hr>
        <hr>
        <div>
            <form action='billing.php' method='POST'>

                <h3>Vegetarian 7 inch Pizza</h3>

                    <label>Single Topping Paneer Pizza</label>|
                    <label>Price: Rs. <?php echo $item_price["Single Topping Paneer Pizza"] ?></label>|
                    <label>Qty</label><input type="number" name="Single Topping Paneer Pizza">
                    <input type="checkbox" name="Check Single Topping Paneer Pizza" hidden><br>
                    <br>
                    <label>Single Topping Sweet Corn Pizza</label>|
                    <label>Price: Rs. <?php echo $item_price["Single Topping Sweet Corn Pizza"] ?></label>|
                    <label>Qty</label><input type="number" name="Single Topping Sweet Corn Pizza">
                    <input type="checkbox" name="Check Single Topping Sweet Corn Pizza" hidden><br>
                    <br>
                    <label>Single Topping Mushroom Pizza</label>|
                    <label>Price: Rs. <?php echo $item_price["Single Topping Mushroom Pizza"] ?></label>|
                    <label>Qty</label><input type="number" name="Single Topping Mushroom Pizza">
                    <input type="checkbox" name="Check Single Topping Mushroom Pizza" hidden><br>

                <h3>Non-Vegetarian 7 inch Pizza</h3>

                    <label>Single Topping Classic Chicken Pizza</label>|
                    <label>Price: Rs. <?php echo $item_price["Single Topping Classic Chicken Pizza"] ?></label>|
                    <label>Qty</label><input type="number" name="Single Topping Classic Chicken Pizza">
                    <input type="checkbox" name="Check Single Topping Classic Chicken Pizza" hidden><br>
                    <br>
                    <label>Single Topping Tandoori Chicken Pizza</label>|
                    <label>Price: Rs. <?php echo $item_price["Single Topping Tandoori Chicken Pizza"] ?></label>|
                    <label>Qty</label><input type="number" name="Single Topping Tandoori Chicken Pizza">
                    <input type="checkbox" name="Check Single Topping Tandoori Chicken Pizza" hidden><br>
                    <br>
                    <label>Single Topping Chicken Italian Pizza</label>|
                    <label>Price: Rs. <?php echo $item_price["Single Topping Chicken Italian Pizza"] ?></label>|
                    <label>Qty</label><input type="number" name="Single Topping Chicken Italian Pizza">
                    <input type="checkbox" name="Check Single Topping Chicken Italian Pizza" hidden><br>
                    <br>
                <button type="submit" name="submit">Add to Cart</button>
                <button>Clear</button>
            </form>
        </div>
        <div>
        
    </body>
</html>
