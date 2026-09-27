<?php
$tamp = 100000;

if ($tamp >= 100000) {
    echo "the weather is good";
} else {
    echo "the weather is bad";
}
?>
<?php
$age = 20;
$citizen = true;

if ($age >= 18 && $citizen == true) {
    echo "you may vote";
} else {
    echo "you may not vote";
}
?>
<?php
$age = 20;
$citizen = false;

if ($age >= 18 && $citizen == true) {
    echo "you may vote";
} else {
    echo "you may not vote";
}
?>