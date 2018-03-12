<?php
/**
 *
 *
Yra du masyvai su skaičiais.
Padaryti funkciją, kuri pakeistų nuliais visus pirmo masyvo elementus kurie egzistuoja ir antrame masyve (sutampančius).
Funkcijos parametrai: du masyvai. Funkcija turi gražinti pakeistą pirmą masyvą. Pademonstruoti veikimą.
 * *
 */
$m1= [4,5,6,8];
$m2= [8,9,3,4];

function fnc($a1,$a2){
    $x=array_values(array_intersect($a1, $a2));
    array_map(function($e) use(&$a1){
        while(true){
            $ind = array_search($e, $a1);
            if ($ind === false) break;
            $a1[$ind] = 0;
        }
return $e;
}, $x);
return$a1;
}
var_dump(fnc($m1, $m2));