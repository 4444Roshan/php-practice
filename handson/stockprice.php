<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock Price Analysis</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #86A7FC;
        }
        h1{
            text-align: center;
        }
        input[type="text"] {
            width: 50%;
            padding: 10px;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            background-color: grey;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 10px;
        }
        #inner{
            background-color: blanchedalmond;
            margin: 10px 30%;
            padding:10px;
        }
    </style>
</head>
<body>
    <h1> Analysing Stock Price Changes</h1>
    <form method="post">
        <label for="stock_prices">Enter stock prices (comma-separated):</label>
        <input type="text" id="stock_prices" name="stock_prices" placeholder="e.g., 100, 105, 110, ...">
        <input type="submit" value="Analyze">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $stock_prices_str = $_POST['stock_prices'];
        $stock_prices = explode(",", $stock_prices_str);

        // Calculate mean
        $mean = array_sum($stock_prices) / count($stock_prices);

        // Calculate median
        sort($stock_prices);
        $count = count($stock_prices);
        $middle = floor($count / 2);
        $median = ($count % 2 == 0) ? ($stock_prices[$middle - 1] + $stock_prices[$middle]) / 2 : $stock_prices[$middle];

        // Calculate mode
        $frequency = array_count_values($stock_prices);
        $max_frequency = max($frequency);
        $mode = array_keys($frequency, $max_frequency);

        // Calculate range
        $range = max($stock_prices) - min($stock_prices);

        // Calculate minimum and maximum
        $minimum = min($stock_prices);
        $maximum = max($stock_prices);

        // Count elements
        $count_elements = count($stock_prices);

        echo "<div id='inner'>";
        echo "<p>Mean: " . round($mean, 2) . "</p>";
        echo "<p>Median: " . round($median, 2) . "</p>";
        echo "<p>Mode: " . implode(", ", $mode) . "</p>";
        echo "<p>Range: " . round($range, 2) . "</p>";
        echo "<p>Minimum: " . $minimum . "</p>";
        echo "<p>Maximum: " . $maximum . "</p>";
        echo "<p>Count of elements: " . $count_elements . "</p><div>";
    }
    ?>
</body>
</html>
