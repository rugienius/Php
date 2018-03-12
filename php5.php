<?php
$m = [4,6,8,9,7];

function fdr($mm){
    $k = [];
    foreach ($mm as $d) {
        if ($d % 2 == 0) $k[]=$d;

        else $k[]=0;
    }
    return $k;
}

var_dump(fdr($m));
