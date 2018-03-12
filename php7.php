<?php
$m= ['Antanas', 'Petras', 'Jonas', 'Gedmantas'];
function fdr($mm)
    {for ($d=0; $d< count($mm); $d++){
        $mm[$d]= strlen($mm[$d]);
    }
    return $mm;
}
var_dump(fdr($m));