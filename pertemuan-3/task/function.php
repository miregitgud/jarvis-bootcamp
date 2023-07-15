<?php
function divide($nilai1, $nilai2) {
    if ($nilai2 != 0) {
        echo " Hasil pembagian dari nilai yang dimasukkan adalah " . $nilai1 / $nilai2;
    } else {
        echo "Pembagian dengan bilangan 0 tidak bisa dilakukan.";
    }
}

$result1 = divide(8, 0);
echo $result1; // Output: Pembagian dengan bilangan 0 tidak bisa dilakukan.

$result2 = divide(16, 8);
echo "\n" . $result2; // Output: Hasil pembagian dari nilai yang dimasukkan adalah 2.

?>