<?php

$s=" labas rytas ";
echo '"' . $s . '"<br>';
echo '"' . trim($s) . '"<br>';
echo '"' . ltrim($s) . '"<br>';
echo '"' . rtrim($s) . '"<br>';
echo '"' . ltrim(trim($s)) . '"<br>';
echo strlen($s) . '<br>';
echo strtolower($s) . '<br>';
echo strtoupper($s) . '<br>';
$s = "labas rytas";
echo ucfirst($s) . '<br>';
echo ucwords($s) . '<br>';
echo str_shuffle($s) . '<br>';
echo strtoupper('ąčęąėę') . '<br>';
echo mb_strtoupper('ąčęą', 'UTF-8') . '<br>';
echo sprintf( 'Labas %s,%s',    'rytas',   'aa') . '<br>';
$s = 'labas rytas stai as ir cia';
$s = explode(' '$s);
var_dump($m);
$m = ['aaa', 'bbb', 'ccc'];
echo '<br>' . implode(',', $mm) . '<br>' ;
echo substr($s,6) . '<br>' ;
echo substr($s, start 6 , lengh 5) . '<br>' ;
echo strpos($s, needle re'rytas') . '<br>' ;
echo str_replace('rytas', 'vakaras',$s) . ' <br>';

$a = 'abd';
$b = 'abcc';echo strcmp ($a, $b)