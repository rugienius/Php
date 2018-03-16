<?php
/**
Sukurkite PHP skriptą, kuriame būtų aprašyta klasė “automobiliai”, kuri turi savybes ‐ gamintojas, modelis, metai.
 * Sukurkite standartinį klasės __construct metodą, kuriam perdavus tris parametrus ‐ gamintojas, modelis, metai ‐ perduotus parametrus padėtų į savo savybes.
 * Pademonstruoti veikimą.
 */

class auto
{
    public $gamintojas;
    public $metai;
    public $modelis;

    function __construct($gamintojas, $metai, $modelis)
    {
        $this->gamintojas = $gamintojas;
        $this->metai = $metai;
        $this->modelis = $modelis;
    }
}
$mas= [];
$mas[] = new auto ('audi', 'a6' , 2006);
$mas[] = new auto ('opel', 'astra' , 1999);
$mas[] = new auto ('ford', 'focus' , 2003);
var_dump($mas);