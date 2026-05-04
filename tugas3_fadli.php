<?php
// nilai jari-jari dan garis pelukis
$r = 7;
$s = 10;

// nilai phi
$phi = 3.14;

// perhitungan
$luasAlas = $phi * $r * $r;
$luasPermukaan = ($phi * $r * $r) + ($phi * $r * $s);

// output
echo "Jari-jari (r) = $r <br>";
echo "Garis pelukis (s) = $s <br><br>";

echo "Luas Alas = π x r² = $luasAlas <br>";
echo "Luas Permukaan = πr² + πrs = $luasPermukaan <br>";
?>