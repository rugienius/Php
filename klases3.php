<?php

class a
{
    private $x, $k;
    private $y;

    function fnc(){
        return $this->x * $this->y;
    }
function __construct($xx, $yy){
$this->x = $xx;
$this->y = $yy;
}
}

$a = new a(2,3);
echo $c->fnc() . '<br>';