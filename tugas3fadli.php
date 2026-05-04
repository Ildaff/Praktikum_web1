<?php
$saldoAwal = 2000000;
$bunga = 0.03;
$bulan = 11;

// perhitungan saldo akhir (bunga majemuk)
$saldoAkhir = $saldoAwal;

for ($i = 1; $i <= $bulan; $i++) {
    $saldoAkhir += $saldoAkhir * $bunga;
}

echo "Saldo awal : Rp. $saldoAwal <br>";
echo "Bunga per bulan : 3% <br>";
echo "Lama menabung : $bulan bulan <br>";
echo "Saldo akhir setelah $bulan bulan adalah : Rp. " . number_format($saldoAkhir, 0, ',', '.') . "<br>";
?>