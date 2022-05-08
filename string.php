<?php
// function dd($array){
//     echo "<pre>";
//     echo print_r($array);
//     echo "</pre>";
//     }
$str="人易科技:上 機 測 驗 - 演算法";
$changestr=str_replace(":","：" , $str);
echo $changestr;
echo "<br>";



$first=mb_substr($str,0,12);
$newfirst=str_replace(" ","" , $first);
$last=mb_substr($str,12);
echo $newfirst . $last;
echo "<br>";
// $arraystr=mb_str_split($str,1);
// for($i=6;$i<=10;$i+=2){
// unset($arraystr[$i]);
// }
// $newarray=implode($arraystr);
// echo $newarray;
// echo "<br>";



$newstr=$newfirst . $last;
echo mb_substr($newstr,5,4);
// for($n=5;$n<=11;$n+=2){
//     $a=$arraystr[$n];
//     echo $a;
// }









