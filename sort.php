<?php
function dd($array)
{
    echo "<pre>";
    echo print_r($array);
    echo "</pre>";
}
$array = [77, 5, 5, 22, 13, 55, 97, 4, 796, 1, 0, 9];
$newarray = '';
for ($x = 0; $x < 12; $x++) {
    //dd($array);
    $new = 0;
    for ($i = 0; $i < count($array) - 1; $i++) {
        if ($array[$new] >= $array[$i + 1]) {
            $new = $new;
        } else {
            $new = $i + 1;
        }
    }

    $newarray = $array[$new] . "," . $newarray;
    //echo $newarray;
    //echo "<br>";
    array_splice($array, $new, 1);
}
echo rtrim($newarray, ",");
