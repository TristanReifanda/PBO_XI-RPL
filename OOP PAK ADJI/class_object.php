<?php

class dataPribadi {
    // property
    public $nama_lengkap;
    public $alamat;
    public $umur;
    public $email;

    //method
     public function setname($nama_lengkap) {

        $this->nama_lengkap = $nama_lengkap;
     }


     public function setalamat($alamat) {

        $this->alamat = $alamat;
     }

     public function setumur($umur) {

        $this->umur = $umur;
     }

     public function setemail($email) {

        $this->email = $email;
     }

     // return

     public function getname () 
     {
        return $this->nama_lengkap;
     }

     public function getalamat () 
     {
        return $this->alamat;
     }

     public function getumur () 
     {
        return $this->umur;
     }

     public function getemail () 
     {
        return $this->email;
     }    


}

//instansiasi class
$datapribadi = new datapribadi();

// set object
$datapribadi->setname('titan');
$datapribadi->setalamat('AMD');
$datapribadi->setumur('16');
$datapribadi->setemail('wanzzz');

echo $datapribadi->getname();
echo $datapribadi->getalamat();
echo $datapribadi->getumur();
echo $datapribadi->getemail();
?>