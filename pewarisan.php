<?php

class Hewan {
    
    private $namahewan;
    private $jenis;

    // method setter
    public function setinformasihewan($nama, $jenis) {
         $this->namahewan = $nama;
        $this->jenis = $jenis;
       
    }

    // method getter
    public function getinformasihewan() {
        return $this->namahewan .''. $this->jenis;
        // $this->jenis;
        
    }
}

// child class
class keturunanhewanpertama extends hewan{}
class keturunanhewankedua extends hewan{}
class keturunanhewanketiga extends hewan{}

$hewan = new keturunanhewanpertama;
$hewan->setinformasihewan('harimau' , ' karnivora');
echo $hewan->getinformasihewan();

$hewan2 = new keturunanhewankedua;
$hewan2->setinformasihewan('</br>kambing' , ' herbivora');
echo $hewan2->getinformasihewan();

$hewan3 = new keturunanhewanketiga;
$hewan3->setinformasihewan('</br>orang utan' , ' omnivora');
echo $hewan3->getinformasihewan();
?>