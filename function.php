<?php





function twoSum($nums,$target){
    for($i=0;$i<count($nums);$i++){
        for($x=$i+1;$x<count($nums);$x++){
         if($nums[$i] + $nums[$x]==$target && 2<=count($nums) && count($nums)<=103 && -109<=$nums[$i] && $nums[$i]<=109 && -109<=$target && $target<=109){
            return $i . "&" . $x;
         }
        }
     }  

}

$aa=[1,4,3,2,11];
$bb=12;
echo twoSum($aa,$bb);


?>