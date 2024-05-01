<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Calculator</title>
    <style>
        .same{
            display: inline-block;
            justify-content:space-between;
        }
        #s1{
            background-color:#fff9c4;
        }
        #firstDiv{
            background: #03aaf4;
            margin:10%;
        }
        #SecondDiv{
            background:#03aaf4;
        }
        p{
            margin:5%;
            text-align:center;
        }
        ul{
            padding:15px;
        }
        #c2{
            background:#ec407a;
            border-radius:30% 30% 0% 0%; 
        }
        #p1{
            margin-top: 0px;
        margin-bottom: 0px;
        padding-top: 50px;
        }
    </style>
</head>
<body>
   <center id="c2"> <h1>Age Calculator</h1>
    <form action="" method="post">
        Enter Date of Birth (YYYY-MM-DD):
        <input type="text" name="DOB" required><br><br>
        <!--Enter Current Date (YYYY-MM-DD):
        <input type="text" name="ToDate" required><br><br>-->
        <input type="submit" name="calculate" value="Calculate Age">
    </form>
    </center>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $DOB = $_POST['DOB'];
        //$ToDate = $_POST['ToDate'];
        $ToDate = date('Y-m-d');

        if (empty($DOB) || empty($ToDate)) {
            echo "<p style='color: red;'>Both input values are required.</p>";
        } else {
            // Validate date format
            $bday = date_create_from_format('Y-m-d', $DOB);
            $today = date_create_from_format('Y-m-d', $ToDate);
            
            function findWeekday($date) {
                $days = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
                $day = date('w', strtotime($date));
                return $days[$day];
            }

            if (!$bday || !$today) {
                echo "<p style='color: red;'>Both input values must be valid dates (YYYY-MM-DD).</p>";
            } else {
                $DOB = $bday->format('d F Y');
                $ToDate = $today->format('d F Y');

                // Calculate age
                $age = date_diff(date_create($DOB), date_create($ToDate));
                $years = $age->y;
                $months = $age->m;
                $days = $age->d;

                echo "<center id='s1'><p id='p1'>Your AGE is <strong>$years Years.</strong></p>";
                echo "<div class = 'same' id = 'firstDiv'><p>Born On: ".findWeekday($DOB). " <strong>$DOB</strong></p>";
                echo "<p>Age On (Today): ".findWeekday($ToDate). " <strong>$ToDate</strong></p></div>";
                echo "<div class = 'same' id = 'SecondDiv'><ul style='list-style: none'>";
                echo "<li>$years years $months months $days days</li>";
                $months = $years * 12 + $months;
                echo "<li>$months months $days days</li>";
                $weeks = $months * 4.3333 + floor($days / 7);
                echo "<li>" . floor($weeks) . " weeks and " . ($days % 7) . " days</li>";
                $days = floor($weeks) * 7 + $days;
                echo "<li>$days days</li>";
                echo "</ul></div></center>";
            }
        }
    }
    ?>
</body>
</html>

