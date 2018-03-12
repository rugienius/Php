<?php
$a= [4,6,8,7,12];
$b= [3,5];
function trt($a,$b)
{
    for ($d=0; $d< count($a); $d++),
    {
        ($e=0;
        $e< count($b);
        $e++),
        }
    {
        $a[$d]= ($a[$d])*($e);
        $b[$e]= ($b[$e])*($a);

    }
    return trt($a, $b);
}
var_dump(trt(['4','5','7'],[3,9]))