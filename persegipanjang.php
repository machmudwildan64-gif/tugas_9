<?php
class PersegiPanjang {
    public $panjang;
    public $lebar;

    public function hitungLuas() {
        return $this->panjang * $this->lebar;
    }
}

// Membuat objek dan menampilkan luas
$pp = new PersegiPanjang();
$pp->panjang = 10;
$pp->lebar = 5;
echo "Luas Persegi Panjang: " . $pp->hitungLuas();
?>