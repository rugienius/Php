<?php
 class d
 {
     private $mas = [];

     function add($number)
     {
         $this->mas[] = $number;
     }

     function average(){
        $sum= 0;
        for ($i=0; $i<count($this->mas);$i++)$sum= $this->mas[$i];
         return $sum/count($this->mas);

     }
 }
 $b= new d();
$b->add(4);
    $b->add(6);
        $b->add(5);
        echo $b->average();
