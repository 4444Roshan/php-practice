<!DOCTYPE html>
<html>
<head>
    <style>
        .update{
            height: 10rem;
            width:100%;
           
        }
        P{  
            margin:2%;
            padding: 2%;
            border-radius:5px ;
        }
        .up{
            display:inline-flex;
            justify-content:space-around;
        }
        #a1{
            background-color:green;
            color:white;
            height:70px;
            width:70px;
            text-align:center;
        }
        #a2{
            background-color:green;
            color:white;
            height:70px;
            width:70px;
            text-align:center;
        }
        #a3{
            background-color:green;
            color:white;
            height:70px;
            width:70px;
            text-align:center;
        }
        #a4{
            background-color:green;
            color:white;
            height:70px;
            width:70px;
            text-align:center;
        }
        label{
            padding: 5px;
        }
        select{
            margin: 10px;
            padding: 10px;
        }
        input{
            padding:10px;
            border-radius: 5px;;
        }
    </style>
    <title>Length Conversion Calculator</title>
</head>
<body>
    <center><h1 style="background-color:#C5E898; color:white; font-size:50px">Length Conversion Calculator</h1>
    <form method="post" action="">
        <label for="value">Enter the value to convert</label>
        <input type="text" name="value" id="value" required>
        <label for="unit">Unit</label>
        <select name="unit" id="unit" required>
            <option value="km">Kilometre</option>
            <option value="mile">Mile</option>
            <option value="meter">Meter</option>
            <option value="feet">Feet</option>
            <option value="inch">Inch</option>
        </select>
        <br><br><?php
    if(isset($_POST['calculate'])){
   $value = $_POST['value'];
   $unit = $_POST['unit'];

   switch($unit){
       case 'km':
        $miles = $value * 0.621371;
        $meters = $value * 1000;
        $feet = $value * 3280.84;
        $inches = $value * 39370.1;
        echo "<center><div class='update'> 
        <p class='up' id='a1'> Miles <br>".$miles."</p>
        <p class='up' id='a2'> Meter <br>".$meters."</p>
        <p class='up' id='a3'> Feet <br>".$feet."</p>
        <p class='up' id='a4'> Inches <br>".$inches."</p>
    </div><br></center>";
           break;

       case 'mile':
        $km = $value * 1.6093;
        $meters = $value * 1609.3;
        $feet = $value * 5280;
        $inches = $value * 63360;
        echo "<center><div class='update'> 
        <p class='up' id='a1'> kilo-meter <br>".$km."</p>
        <p class='up' id='a2'> Meter <br>".$meters."</p>
        <p class='up' id='a3'> Feet <br>".$feet."</p>
        <p class='up' id='a4'> Inches <br>".$inches."</p>
    </div><br></center>";
           break;

       case 'meter':
        $miles = $value * 0.000621371;
        $km = $value * 0.001;
        $feet = $value * 3.28084;
        $inches = $value * 39.3701;
        echo "<center><div class='update'> 
        <p class='up' id='a1'> kilo-meter <br>".$km."</p>
        <p class='up' id='a2'> Miles <br>".$miles."</p>
        <p class='up' id='a3'> Feet <br>".$feet."</p>
        <p class='up' id='a4'> Inches <br>".$inches."</p>
    </div><br></center>";
            break;

       case 'feet':
        $miles = $value * 0.00018939;
        $meters = $value * 0.3048;
        $km = $value * 0.0003048;
        $inches = $value * 12 ;
        echo "<center><div class='update'> 
        <p class='up' id='a1'> kilo-meter <br>".$km."</p>
        <p class='up' id='a2'> Miles <br>".$miles."</p>
        <p class='up' id='a3'> Meter <br>".$meters."</p>
        <p class='up' id='a4'> Inches <br>".$inches."</p>
    </div><br></center>";
            break;

       case 'inch':
        $miles = $value * 0.0000157828;
        $meters = $value * 0.0254;
        $feet = $value * 0.083333;
        $km = $value * 0.000254;
        echo "<center><div class='update'> 
        <p class='up' id='a1'> kilo-meter <br>".$km."</p>
        <p class='up' id='a2'> Miles <br>".$miles."</p>
        <p class='up' id='a3'> Meter <br>".$meters."</p>
        <p class='up' id='a4'> Feet <br>".$feet."</p>
    </div><br></center>";
            break;
   }
}
?>
        <input  method="post" action="" type="submit" value="Calculate" name="calculate">
    </form></center>

    
</body>
</html>