<?php
$age = -1;

if ($age >= 18) {
    echo "you may enter this site.";
} elseif ($age < 0) {
    echo "that wasn't a valid age.";
} elseif ($age < 65) {
    echo "You are an adult.";
} else {
    echo "You are a senior citizen.";
}
?>
<?php
$hours = 10;
$rate = 15;
$weeklyPay = $hours * $rate;
if ($hours<=0){
    $weeklyPay = 20;



}
elseif ($hours >= 40) {
    $weeklyPay = $hours * $rate * 1.5;
}
if ($hours < 40) {
    $weeklyPay = $hours * $rate;
}

echo "you made $weeklyPay this week."
?>