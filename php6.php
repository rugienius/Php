<?php
$m= [4,6,8,9,7,3];
function fdr($mm)
{
    for($d=0; $d<count($mm)/2; $d++){
        {
            $mm[$d]= $mm[$d]**2;
        }
        return $mm;
    }
}
var_dump(fdr($m));