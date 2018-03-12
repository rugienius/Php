<?php
/**
 *
 *
 * Yra masyvas su tekstais. Padaryti funkciją, kuri vietoje tekstų į masyvą įrašytų tekstų pirmąsias raides.
 Funkcijos parametras - masyvas. Funkcija turi gražinti pakeistą masyvą. Pademonstruoti veikimą.

 * *
 */
$m= ['Antanas', 'Petras', 'Jonas', 'Gedmantas'];
function trt ($b) {
    $g= [];
foreach ($b as $f){
    $g[] = substr($f,0,1);
}
return $g;
}
var_dump (trt($m));
