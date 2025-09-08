<?php

class mobil 
{
    //public
    public $type = 'pickup ';
    public $roda =  8;

    public function jalan()
    {
        echo'test';
    }
}

$kendaraan = new mobil();
echo$kendaraan->type;
echo$kendaraan->roda;
echo$kendaraan->jalan();


?>