<?php

class dataPribadi {
    // property
    public $nama_lengkap;
    public $alamat;
    public $umur;
    public $email;

    //method
     public function setdataPribadi($nama_lengkap, $alamat, $umur, $email) {

        $this->nama_lengkap = $nama_lengkap;
        $this->alamat = $alamat;
        $this->umur = $umur;
        $this->email = $email;
     }


     // return

     public function getdataPribadi() 
     {
        return 'nama saya ' . $this->nama_lengkap. 'alamat di ' .$this->alamat. 'usianya '.$this->umur. 'emailnya ' .$this->email;
     }

     
}

//instansiasi class
$datapribadi = new datapribadi();

// set object
$datapribadi->setdataPribadi('titan ', 'amd ', '16 ', 'wanwanzz ');
// $datapribadi->setalamat('AMD');
// $datapribadi->setumur('16');
// $datapribadi->setemail('wanzzz');

echo $datapribadi->getdataPribadi() ."<br>";
// echo $datapribadi->getdataPribadi();
// echo $datapribadi->getdataPribadi();
// echo $datapribadi->getdataPribadi();
?>