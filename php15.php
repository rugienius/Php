<?php
/**
 *
Yra masyvas su skaičiais. Paversti masyvą į tekstą apjungiant masyvo elementus kableliais ir įrašyti į failą.
 *Nuskaityti iš failo ir išvesti į puslapį.PhpStorm.
 * User: CodeAcademy
 * Date: 2018-03-12
 * Time: 13:10
 */
$c = [4,6,8,9,7,3];
$m = implode( ',', $c);
file_put_contents('uzduotis.txt',$m);
$s = file_get_contents('uzduotis.txt');
echo $s . '<br>';
