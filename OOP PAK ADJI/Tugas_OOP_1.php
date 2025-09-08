<?php

class Buku {
    //property
    public $judul_buku;
    public $nama_penulis;

    public function __construct($judul, $penulis)
    {
        $this->judul_buku = $judul;
        $this->nama_penulis = $penulis;
    }

    //method untuk menampilkan informasi buku
    public function tampilkaninformasi()
    {
        echo "judul: $this->judul_buku<br>";
        echo "penulis $this->nama_penulis<br>";
    }
} 

$buku1 = new buku("Laskar pelangi", "Andrea Hirata", 2005, 'Jakarta');
$buku2 = new buku("Negeri 5 menara", "Ahmad Fuadi", 2009, 'Jakarta');

//data informasi buku
$buku1->tampilkaninformasi();
echo "<hr>";
$buku2->tampilkaninformasi();
echo "<hr>";

?>