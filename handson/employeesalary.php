<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            height:40vh;
        }
        .comb{
            background-color: chocolate ;
            padding-top:10%;
        }
        #empid{
            border: solid blue 1px;
        }
        .sec1{
            background-color: beige;
        }
        .sec2{
            background-color: blanchedalmond;
        }
        th,td{
            padding:10px;
        }
        #as{
            text-align: center;
            padding:25px;
            
        }
    </style>
</head>

<body>

    <center>
        <form action="" method="post"><div class="comb">
            <label for="">Employee ID: </label>
            <input type="number" name="empid" id="empid"><br><br>
            <label for="">Number of Days Worked: </label>
            <input type="number" name="no_of_days" id="empid"><br><br>
            <input type="submit" value="Generate Pay Salary" name="generate">
            <br>
            <br></div>
        </form>
    </center>


    <?php
    $emp = array(1001 => "Sam", 1002 => "Nancy", 1003 => "John", 1004 => "Kevin", 1005 => "Marry");
    $sal = array(1001 => 65000, 1002 => 37000, 1003 => 45000, 1004 => 47000, 1005 => 34000);

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $emp_id = $_POST["empid"];
        $no_of_days = $_POST["no_of_days"];
        $emp_name = $emp[$emp_id];
        $salary = $sal[$emp_id];
        $basic_pay = 0.5 * $salary;

        $per_day_sal = $basic_pay / 30;

        if ($no_of_days < 29) {
            $basic_salary = $no_of_days * $per_day_sal;
            $basic_salary=round($basic_salary,2);
            $loss_of_pay = $basic_pay - $basic_salary;
            $loss_of_pay=round($loss_of_pay,2);
        } else {
            $basic_salary = 0.5 * $salary;
            $basic_salary=round($basic_salary,2);
            $loss_of_pay = 0;
        }

        
        $HRA = 0.2 * $salary;
        $DA = 0.1 * $salary;
        $Conveyance_Allowance = 0.1 * $salary;
        $Medical_Allowance = 0.1 * $salary;
        $PF = 1500;
        $professional_Tax = 750;
        $deduction = $PF + $professional_Tax;
        $gross_salary = $basic_salary+$HRA+$DA+$Medical_Allowance+$Conveyance_Allowance;
        $gross_salary=round($gross_salary,2);
        $net_salary = $gross_salary - $deduction;
        $net_salary=round($net_salary,2);

        echo "<center>
        <table>
        <tr class='sec1'>
            <th colspan='2'>Salary pay slip</th>
        </tr>
        <br>
        <tr class='sec1'>
            <td>Employee ID:$emp_id</td>
            <td>No of working days:$no_of_days</td>
        </tr>
        <tr class='sec1'>
            <td>Employee Name:$emp_name</td>
            <td>Loss of Pay:$loss_of_pay</td>
        </tr>
        <tr class='sec2'>
            <td>Basic Pay:$basic_salary</td>
            <td>Provident Fund(PF):$PF</td>
        </tr>
        <tr class='sec2'>
            <td>House rent allowance(HRA):$HRA</td>
            <td>Profeesional tax:$professional_Tax</td>
        </tr>
        <tr class='sec2'>
            <td>Dearness Alowance:$DA</td>
            <td>Deduction:$deduction</td>
        </tr>
        <tr class='sec2'>
            <td>Conveyance Allowance:$Conveyance_Allowance</td>
            <td>Gross salary:$gross_salary</td>
        </tr>
        <tr class='sec2'>
            <td>Medical Allowance:$Medical_Allowance</td>
            <td></td>
        </tr>
        <tr class='sec2'>
            <td id='as' colspan='2'>Net salary:$net_salary</td>
        </tr>
    </table>
        
        </center>";

    }

    ?>

</body>

</html>
