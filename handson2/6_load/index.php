<!DOCTYPE html>
<html>
<head>
    <title>Television Products</title>
    <style>
        body{
            text-align: center;

        }
        table{
            margin: 20%;
            border-radius: 5px;
            padding:10px;
        }
        td{
            padding: 10px;
        }
        tr:nth-child(even){
            background-color: blue;
            margin:10px;
        }
        tr:nth-child(odd){
            background-color: palevioletred;
            margin:15px;
        }
    </style>
    
</head>
<body>
    <table border="1">
        <tr>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Category</th>
            <th>Price</th>
            <th>Stock Qty</th>
        </tr>
        <?php
        
        $file = fopen("product.txt", "r");

        
        while (($line = fgets($file)) !== false) {
           
            $product_data = explode(",", $line);

            if (strpos($product_data[2], "Television") !== false) {
                echo "<tr>";
                echo "<td>" . $product_data[0] . "</td>";
                echo "<td>" . $product_data[1] . "</td>";
                echo "<td>" . $product_data[2] . "</td>";
                echo "<td>" . $product_data[3] . "</td>";
                echo "<td>" . $product_data[4] . "</td>";
                echo "</tr>";
            }
        }
        $file = fopen("product.txt", "r");

if ($file === false) {
    echo "Error: Unable to open file.";
    exit();
}

       
        fclose($file);
        ?>
    </table>
</body>
</html>
