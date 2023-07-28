<?php
class Kendaraan {
    public $merk;
    public $warna;

    public function __construct($merk, $warna) {
        $this->merk = $merk;
        $this->warna = $warna;
    }

    public function tambahKecepatan() {
        return "Saat ini mobil $this->merk berwarna $this->warna memiliki kecepatan sebesar ";
    }

    // Adding a __toString() method to print the object directly
    public function __toString() {
        return $this->tambahKecepatan();
    }

}

class Speed extends Kendaraan {
    public $speed = 50;

    public function __construct($merk, $warna, $changeSpeed) {
        parent::__construct($merk, $warna);
        $this->speed = $this->speed + $changeSpeed; // Fixed the variable name here
    }

    public function changeSpeed() {
        return $this->tambahKecepatan() . $this->speed; // Fixed method name here
    }
}

$volvo = new Speed("Volvo", "Item", -20); // Passing the changeSpeed value here
echo $volvo->changeSpeed(); // Output: Saat ini mobil Volvo berwarna Item memiliki kecepatan sebesar 70
