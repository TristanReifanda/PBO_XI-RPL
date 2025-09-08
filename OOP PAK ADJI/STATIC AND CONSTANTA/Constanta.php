<?php

class lingkaran
{
    public const pi = 3.14;

    public function luas($jari)
    {
        $hasiljari = $jari * $jari;
        echo 'hasil:'. self::pi * $hasiljari;
    }
}

$lingkaran = new lingkaran;
echo 'pi:'.$lingkaran::pi . '</br>';
echo $lingkaran->luas(8);

?>