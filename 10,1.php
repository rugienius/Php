<?php
class turgus
{
    public $mas = [];

    function auto($gamintojas, $metai, $modelis, $kaina)
    {
        $this->mas[] = [
            'gamintojas' => $gamintojas,
            'metai' => $metai,
            'modelis' => $modelis,
            'kaina' => $kaina,
        ];
    }

    function minKaina()
    {
        $kaina = $this->mas[0]['kaina'];
        foreach ($this->mas as $min) {
            if ($min['kaina']<$kaina)
                $kain = $kaina['kain'];
        }

        return $kaina;
    }
}
$p= new turgus();
 $p->auto('audi', 'a6' , 2006, 6000);
  $p->auto('bmw', 'm3' , 2009, 8000);
   $p->auto('ford', 'mustang' , 2005, 7500);
   echo $p->minKaina();