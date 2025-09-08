<?php

class Singa 
{
    public static $kaki = 4;

    // public static function lari()
    // {
    //     echo' singa itu berlari';
    // }

    // nama class
    //static
    //self
    public function kaki1()
    {
        echo singa::$kaki;
    }
    public function kaki2()
    {
        echo static::$kaki;
    }
    public function kaki3()
    {
        echo self::$kaki;
    }
}

$Hewan = new Singa();
$Hewan->kaki1();
$Hewan->kaki2();
$Hewan->kaki3();

// echo singa::$kaki;
// echo Singa::lari();

?>
