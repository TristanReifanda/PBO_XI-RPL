<?php

class Mobil
{
    private $roda = 4;

    protected function jalan()
    {
        echo 'mobil berjalan';
    }
    
    
    public function jumlahroda()
    {
        echo $this->roda;
    }
}

$avanza = new Mobil();

echo $avanza->jalan();
echo PHP_EOL;
?>
