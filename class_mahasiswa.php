<?php
class Mahasiswa {
    public $nama;

    public function tampilkanNama() {
        return "Nama Mahasiswa: " . $this->nama;
    }
}

// Membuat 1 objek Mahasiswa
$mhs = new Mahasiswa();
$mhs->nama = "Andi Pratama";
echo $mhs->tampilkanNama();
?>