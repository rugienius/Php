<?php
/**
 *
 *
Yra masyvas su tekstais. Padaryti funkciją, kuri masyvo tekstuose pakeistų nurodytą raidę į tarpą.
 * Funkcijos parametrai: masyvas ir nurodyta raidė. Funkcija turi gražinti pakeistą masyvą.
 * Pademonstruoti veikimą.
 *
 */
$m= ['Antanas', 'Petras', 'Jonas', 'Gedmantas'];
function frn($a){
    $k=[];
    foreach($a as $c){
       $k[]= substr_replace("$c", " ",3,1);
    }
    return $k;
}
var_dump(frn($m));
