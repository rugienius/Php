<?php

class c
{
    private $mas = [];
    function add($name,$age, $salary){
        $this->mas[] = [
            'name' => $name,
            'age' => $age,
            'salary' => $salary
        ];
    }
    function info(){
        return $this->mas;
    }
}

$p = new c();
$p->add('Jonas', 20, 500);
$p->add('Jonas', 21, 700);
$p->add('Jonas', 22, 600);
$p->add('Jonas', 33, 800);
$p->add('Jonas', 20, 550);
var_dump($p->info());