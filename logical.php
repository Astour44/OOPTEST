<?php

$a = [77, 5, 5, 22, 13, 55, 97, 4, 796, 1, 0, 9];
$b = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
$new = '';
for ($i = 0; $i < count($a); $i++) {
    for ($x = 0; $x < count($b); $x++) {
        if ($a[$i] == $b[$x]) {
            $new = "$a[$i]" . "," . "$new";
        }
    }
}
$str = rtrim($new, ",");
//echo $str;
$c = array_unique(explode(',', $str));
sort($c);
echo "<pre>";
print_r($c);
echo "</pre>";
//print_r(array_intersect($b,$a));
?>

<?php
$a = [77, 5, 5, 22, 13, 55, 97, 4, 796, 1, 0, 9];
$b = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];


//77 22 13 55 97 796


$del = '';
for ($i = 0; $i < count($a); $i++) {
    for ($x = 0; $x < count($b); $x++) {
        if ($a[$i] == $b[$x]) {
            $del=$del .",". $i;
        }
    }
}
$arrayd=$a;
//echo substr($del,1);
$d = explode(",", $del);
//print_r($d);
//echo count($d);
for($n=1;$n<count($d);$n++){
unset($arrayd[$d[$n]]);
}
//a有b沒有

echo "<br>";
echo "<pre>";
print_r($arrayd);
echo "</pre>";






?>

<?php
$newa = '';
$newb = '';
for ($i = 0; $i < count($a); $i++) {
    $newa = $newa . "," . $a[$i];
}
$newsa = substr($newa, 1);
// echo $newsa;

for ($i = 0; $i < count($b); $i++) {
    $newb = $newb . "," . $b[$i];
}
// echo $newb;

$newab = $newsa . $newb;
// echo $newab;
$e = explode(",", $newab);

echo "<pre>";
print_r($e);
echo "</pre>";


// echo "<pre>";
// print_r(array_merge($a,$b));
// echo "</pre>";






















?>