<?php

class PerangkatKeras
{
    public $nama_perangkat;
    private $merek_perangkat;
    protected $jumlah;

    public function setDataPerangkat($nama, $merekPerangkat, $jumlah)
    {
        $this->nama_perangkat = $nama;
        $this->merek_perangkat = $merekPerangkat; 
        $this->jumlah = $jumlah;
    }

    public function getDataPerangkat()
    {
        return 'nama perangkat: ' . $this->nama_perangkat . 'merek perangkat: ' . $this->merek_perangkat . 'jumlahnya: ' . $this->jumlah;
    }
}

$PerangkatKeras = new PerangkatKeras();

$PerangkatKeras->setDataPerangkat('laptop '."<br>",'Lenovo '."<br>",'5 ');
echo $PerangkatKeras->getDataPerangkat();

echo $PerangkatKeras->$merek_perangkat();
echo $PerangkatKeras->$jumlah();
echo $PerangkatKeras->$nama_perangkat();

?>