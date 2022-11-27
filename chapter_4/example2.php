<?php // condintional sentenses

$bank_balance = 1000;
$savings = $money = 0;

if ($bank_balance < 100) {
    $money = 1000;
    $bank_balance += $money;
} else if ($bank_balance > 200) {
    $savings += 100;
    $bank_balance -= 100;
} else {
    $savings += 50;
    $bank_balance -= 50;
}

echo "Bank Balance = $bank_balance <br/>Savings = $savings";
