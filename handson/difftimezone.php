<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The World Time</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        #sec{
            background-color: grey;
            height: 25vh;
            width: 100%;
            text-align: center;
            padding-top:25vh;
            color: #fffffe;
        }
        .time-box {
            background-color: bisque ;
            display: inline-flex;
            justify-content: space-around;
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
            margin-left:10px;
        }
        .outer{
            margin-left: 80px;
            margin-right: 20px;
        }
    
        
    </style>
</head>
<body>
    <h1 id="sec">The World Time</h1>

    <?php
    $time_zones = [
        'America/New_York' => 'New York',
        'Asia/Tokyo' => 'Tokyo',
        'Europe/London' => 'London',
        'Australia/Sydney' => 'Sydney',
        'Africa/Johannesburg' => 'Johannesburg',
        'America/Guyana' => 'Guyana'
    ];
    echo "<div class='outer'>";
    foreach ($time_zones as $zone => $city) {
        date_default_timezone_set($zone);
        $current_time = date('H:i:s A');
        $current_date = date('m-d-Y');
        $current_weekday = date('l');
        echo '<div class="time-box">';
        echo "<center><strong>$city:</strong><br> $current_time<br>";
        echo "Date: $current_date<br>";
        echo "Weekday: $current_weekday";
        echo '</center></div>';
    }
    //header("refresh:0.5");
    echo "</div>";
    ?>
</body>
</html>
