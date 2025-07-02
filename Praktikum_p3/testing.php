<?php

class Mahasiswa {
    private $nama; //access modifier
    private $nim;
    private $semester;

    public function setNama($nama) {
        $this->nama = $nama;
    }
    public function setNim($nim) {
        $this->nama = $nim;
    }
    public function setSemester($semester) {
        $this->nama = $semester;
    }
}

$budi = new Mahasiswa();
$budi->setNama("Budi Santoso");
$budi->setNim('0110224001');
$budi->setSemester(5);

echo $budi 