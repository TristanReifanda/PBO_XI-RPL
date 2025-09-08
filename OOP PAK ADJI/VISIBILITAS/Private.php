<?php

class bus
{
    private $kendaraan = 'bus double decker';
    private $roda = 10;

    private function jalan()
    {
        echo 'Berjalan di tol jagorawi';
    }

    public function informasiKendaraan()
    {
        echo 'kendaraan berjeniskan' . $this->kendaraan . '</br>';
        echo 'kendaraan berjeniskan' . $this->roda . '</br>';
        $this->jalan();
    }
  
}

$bus = new bus();
$bus->informasiKendaraan();
?>
