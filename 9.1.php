<?php

class auto{
    public $gamintojas;
    public $metai;
    public $modelis;
    function __construct($gamintojas, $metai, $modelis)
    {
        $this->gamintojas = $gamintojas;
        $this->metai = $metai;
        $this->modelis = $modelis;
        $x = "%s-%s-%s";
    }
        function duomenys(){
            $x = "%s-%s-%s";
            echo sprintf($x, $this->gamintojas, $this->modelis, $this->metai);
    }
}

    class lengvas extends auto
    {function duomenys()
    {
        $x = "%s-%s-%s";
        echo sprintf($x, $this->gamintojas, $this->modelis, $this->metai);
    }


    }
    class krov extends auto
    {

    }
    $y= new lengvas('audi','a6',2006);
$y->duomenys();
var_dump($y). '<br>';

$y= new krov('bmw','x1',2006);
$y->duomenys();
var_dump($y). '<br>';

$y= new auto('mitsubishi','lancer',2006);
$y->duomenys();
var_dump($y). '<br>';