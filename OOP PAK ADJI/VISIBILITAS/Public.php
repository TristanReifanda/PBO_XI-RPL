<?php

class kendaraan
{
    public $kendaraan = 'bus double decker';
    private $roda = 10;

    public function informasiKendaraan()
    {
        echo 'kendaraan berjeniskan' . $this->kendaraan . '</br>';
        echo 'kendaraan berjeniskan' . $this->roda;
    }
}

$KendaraanUmum = new kendaraan();

echo $KendaraanUmum->informasiKendaraan();
echo PHP_EOL;

?>