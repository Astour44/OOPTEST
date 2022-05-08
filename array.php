<?php
function dd($array)
{
    echo "<pre>";
    echo print_r($array);
    echo "</pre>";
}
$num = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];



$addeven = 0;
for ($i = 0; $i < 10; $i += 2) {
    $addeven = $num[$i] + $addeven;
}
$addodd = 0;
for ($i = 1; $i < 10; $i += 2) {
    $addodd = $num[$i] + $addodd;
}
$total=$addodd-$addeven;
echo $addodd . "-" . $addeven . "=" . $total;
echo "<br>";




$even='';
$odd='';
for ($x = 0; $x < 10; $x++) {
    if ($x % 2 == 0) {
        $even=$even . $x . " ";
    } else {
        $odd = $odd . $x . " ";
    }
}

$neweven=rtrim($even);
$newodd=rtrim($odd);
dd(explode(" ",$neweven));
dd(explode(" ",$newodd));