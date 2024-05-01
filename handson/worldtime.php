<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Time</title>
    <style>
        body {
            background-color: #E8C872;
            font-family: Arial, sans-serif;
        }
        select {
            padding: 10px;
            margin: 10px;
        }
        div{
            width:100%;
            display:inline-flex;
            justify-content:space-around;
        }
        p{
            width:15%;
            display:inline-flex;
            background-color:#FFF3CF;
            justify-content:space-around;
            border:2px solid #C9D7DD;
        }
        h1,h5{
            padding:10vh;
            background-color:#FFF3CF;
            margin-top:0px;
            margin-bottom:0px;   
        }
        h1{
            padding-bottom:0vh;
        }
        label{
            color: blue;
            font-size: x-large;
        }
        select{
            width: 15%;
        }
        input{
            padding: 10px;
            background-color: #637A9F;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<center>
<h1>The World Time</h1>
<h5>All We have to decide is What to do With the Time</h5>
<form method="post">
    <label for="timezone">Select Time Zone:</label>
    <select id="timezone" name="timezone"> 
        <option value="Asia">Asia</option>
        <option value="Europe">Europe</option>
        <option value="Australia">Australia</option>
        <option value="Africa">Africa</option>
        <option value="America">America</option>
    </select>
    <input type="submit" value="Show Time">
</form>
    </center>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function findWeekday($date) {
        $days = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
        $day = date('w', strtotime($date));
        return $days[$day];
    }
    switch($_POST['timezone']){
        case 'Asia':
            date_default_timezone_set("Asia/Shanghai");
            echo "<div><p>Shanghai <br>".date('d-m-Y')."<br>".findWeekday(date('d-m-Y'))."<br>".date('H:i:s A')."</p>";
            date_default_timezone_set("Asia/Singapore");
            echo "<p>Singapore <br>".date('d-m-Y')."<br>".findWeekday(date('d-m-Y'))."<br>".date('H:i:s A')."</p>";
            date_default_timezone_set("Asia/Bangkok");
            echo "<p>Bangkok <br>".date('d-m-Y')."<br>".findWeekday(date('d-m-Y'))."<br>".date('H:i:s A')."</p>";
            date_default_timezone_set("Asia/Kolkata");
            echo "<p>Kolkata <br>".date('d-m-Y')."<br>".findWeekday(date('d-m-Y'))."<br>".date('H:i:s A')."</p>";
            date_default_timezone_set("Asia/Dubai");
            echo "<p>Dubai <br>".date('d-m-Y')."<br>".findWeekday(date('d-m-Y'))."<br>".date('H:i:s A')."</p>";
            date_default_timezone_set("Asia/Tehran");
            echo "<p>Tehran <br>".date('d-m-Y')."<br>".findWeekday(date('d-m-Y'))."<br>".date('H:i:s A')."</p></div>";
            break;
        case 'Europe' :
            date_default_timezone_set("Europe/Moscow");
            echo "<div><p>Moscow <br>".date('d-m-Y')."<br>".findWeekday(date('d-m-Y'))."<br>".date('H:i:s A')."</p>";
            date_default_timezone_set("Europe/Vienna");
            echo "<p>Vienna <br>".date('d-m-Y')."<br>".findWeekday(date('d-m-Y'))."<br>".date('H:i:s A')."</p>";
            date_default_timezone_set("Europe/Berlin");
            echo "<p>Berlin <br>".date('d-m-Y')."<br>".findWeekday(date('d-m-Y'))."<br>".date('H:i:s A')."</p>";
            date_default_timezone_set("Europe/Amsterdam");
            echo "<p>Amsterdam <br>".date('d-m-Y')."<br>".findWeekday(date('d-m-Y'))."<br>".date('H:i:s A')."</p>";
            date_default_timezone_set("Europe/Zurich");
            echo "<p>Zurich <br>".date('d-m-Y')."<br>".findWeekday(date('d-m-Y'))."<br>".date('H:i:s A')."</p>";
            date_default_timezone_set("Europe/London");
            echo "<p>London <br>".date('d-m-Y')."<br>".findWeekday(date('d-m-Y'))."<br>".date('H:i:s A')."</p></div>";
            break;
        case 'Australia' :
            date_default_timezone_set("Australia/Adelaide");
            echo "<div><p>Adelaide <br>".date('d-m-Y')."<br>".findWeekday(date('d-m-Y'))."<br>".date('H:i:s A')."</p>";
            date_default_timezone_set("Australia/Brisbane");
            echo "<p>Brisbane <br>".date('d-m-Y')."<br>".findWeekday(date('d-m-Y'))."<br>".date('H:i:s A')."</p>";
            date_default_timezone_set("Australia/Darwin");
            echo "<p>Darwin <br>".date('d-m-Y')."<br>".findWeekday(date('d-m-Y'))."<br>".date('H:i:s A')."</p>";
            date_default_timezone_set("Australia/Melbourne");
            echo "<p>Melbourne <br>".date('d-m-Y')."<br>".findWeekday(date('d-m-Y'))."<br>".date('H:i:s A')."</p>";
            date_default_timezone_set("Australia/Hobart");
            echo "<p>Hobart <br>".date('d-m-Y')."<br>".findWeekday(date('d-m-Y'))."<br>".date('H:i:s A')."</p>";
            date_default_timezone_set("Australia/Sydney");
            echo "<p>Sydney <br>".date('d-m-Y')."<br>".findWeekday(date('d-m-Y'))."<br>".date('H:i:s A')."</p></div>";
            
            break;
        case 'Africa' :
            date_default_timezone_set("Africa/Cairo");
            echo "<div><p>Cairo <br>".date('d-m-Y')."<br>".findWeekday(date('d-m-Y'))."<br>".date('H:i:s A')."</p>";
            date_default_timezone_set("Africa/Johannesburg");
            echo "<p>Johannesburg <br>".date('d-m-Y')."<br>".findWeekday(date('d-m-Y'))."<br>".date('H:i:s A')."</p>";
            date_default_timezone_set("Africa/Mogadishu");
            echo "<p>Mogadishu <br>".date('d-m-Y')."<br>".findWeekday(date('d-m-Y'))."<br>".date('H:i:s A')."</p>";
            date_default_timezone_set("Africa/Tripoli");
            echo "<p>Tripoli <br>".date('d-m-Y')."<br>".findWeekday(date('d-m-Y'))."<br>".date('H:i:s A')."</p>";
            date_default_timezone_set("Africa/Harare");
            echo "<p>Harare <br>".date('d-m-Y')."<br>".findWeekday(date('d-m-Y'))."<br>".date('H:i:s A')."</p>";
            date_default_timezone_set("Africa/Nairobi");
            echo "<p>Nairobi <br>".date('d-m-Y')."<br>".findWeekday(date('d-m-Y'))."<br>".date('H:i:s A')."</p></div>";
            
            break;
        case 'America' :
            date_default_timezone_set("America/Los_Angeles");
            echo "<div><p>Los_Angeles <br>".date('d-m-Y')."<br>".findWeekday(date('d-m-Y'))."<br>".date('H:i:s A')."</p>";
            date_default_timezone_set("America/New_York");
            echo "<p>New_York <br>".date('d-m-Y')."<br>".findWeekday(date('d-m-Y'))."<br>".date('H:i:s A')."</p>";
            date_default_timezone_set("America/Chicago");
            echo "<p>Chicago <br>".date('d-m-Y')."<br>".findWeekday(date('d-m-Y'))."<br>".date('H:i:s A')."</p>";
            date_default_timezone_set("America/Denver");
            echo "<p>Denver <br>".date('d-m-Y')."<br>".findWeekday(date('d-m-Y'))."<br>".date('H:i:s A')."</p>";
            date_default_timezone_set("America/Costa_Rica");
            echo "<p>Costa_Rica <br>".date('d-m-Y')."<br>".findWeekday(date('d-m-Y'))."<br>".date('H:i:s A')."</p>";
            date_default_timezone_set("America/Phoenix");
            echo "<p>Phoenix <br>".date('d-m-Y')."<br>".findWeekday(date('d-m-Y'))."<br>".date('H:i:s A')."</p></div>";
            
            break;
    }
}
?>

</body>
</html>
