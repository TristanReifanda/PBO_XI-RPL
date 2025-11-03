<?php

//class parent
class postrepository
{
    public function get_lastestpost(){
        $data = 'belajar overidding dan overloading php';
        return $data;
    }
}

class Turunan extends postrepository
{
    public function get_lastestpost(){
        $data = parent::get_lastestpost();
        $data2 = 'SMK ANGKASA 1';
        $uppercase = strtoupper($data);
        $tanggal = date('d:M:Y');
        return $uppercase.'<br>'. strtoupper($data2). '<br>' .($tanggal);
    }
}

$parentclass = new postrepository();
echo $parentclass->get_lastestpost();

echo "<br>";
echo "<br>";

$childclass = new Turunan();
echo $childclass->get_lastestpost();

?>