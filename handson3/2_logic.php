<?php
class BankAccount
{
    private $accountNumber;
    private $balance;

    public function __construct($accountNumber)
    {
        $this->accountNumber = $accountNumber;
        $this->balance = 0;
    }

    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    public function getBalance()
    {
        return $this->balance;
    }

    public function deposit($amount)
    {
        $this->balance += $amount;
        echo "Deposited $amount into account $this->accountNumber. New balance: $this->balance<br>";
    }

    public function withdraw($amount)
    {
        if ($this->balance >= $amount) {
            $this->balance -= $amount;
            echo "Withdrawn $amount from account $this->accountNumber. New balance: $this->balance<br>";
        } else {
            echo "Want to withdraw $amount?<br>";
            echo "Insufficient balance in account $this->accountNumber. Current balance: $this->balance<br>";
        }
    }
}

$account = new BankAccount("SB-1234");
echo "Account Number: " . $account->getAccountNumber() . "<br>";
echo "Initial Balance: " . $account->getBalance() . "<br>";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $deposite = isset ($_POST['deposite']) ? $_POST['deposite'] : null;
    $withdraw = isset ($_POST['withdraw']) ? $_POST['withdraw'] : null;
    if (!$deposite) {
        echo "<pls enter the deposite amount<br>";
    } else {
        $account->deposit($deposite);
    }
    if (!$withdraw) {
        echo "pls enter the amount<br>";
    } else {
        $account->withdraw($withdraw);
        $account->withdraw(700);
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
    enter transctions<br>
    <form action="" method="post">
        deposite:
        <input type="number" name="deposite"><br>
        withdraw:
        <input type="number" name="withdraw"><br>
        <input type="submit" value="submit">
    </form>
</body>

</html>