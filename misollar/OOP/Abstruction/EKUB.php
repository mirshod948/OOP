<?php


namespace OOP;


class EKUB
{
    private $a;
    private $b;

    public function __construct($a, $b)
    {
        $this->a=$a;
        $this->b=$b;
    }
    public function CalcEkub(){
        $a=12;
        $b=6;
        while ($a != $b)
        {
            if ($a > $b) $a %= $b;
            else $b %= $a;

            if ($a == 0) $a = $b;
            if ($b == 0) $b = $a;
        }
        return $a;
    }


}

$n = new EKUB(12, 6);
echo "Resulat: ".$n->CalcEkub();
