<?php

class scanner 
{
    // property
    private $content;
    
    // method set
    public function setcontent($data) 
    {
        $this->content = $data;
    }

    // method print output
    public function printcontent() 
    {
        echo $this->content;
    }
}

$data = ['scanner hp hardware </br>', 'scanner hp software </br>', 'scanner redmi </br>'];
$jumlahdata = count($data);

for($i = 0; $i < $jumlahdata; $i++){
$scanner[$i] = new scanner();
$scanner[$i]->setcontent($data[$i]);
$scanner[$i]->printcontent();
}

// scanner pertama


// $scanner2 = new scanner();
// $scanner2->setcontent('</br> scanner hp software');
// $scanner2->printcontent();

// $scanner3 = new scanner();
// $scanner3->setcontent('</br> scanner redmi');
// $scanner3->printcontent();

?>