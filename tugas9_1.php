<?php
// siapkan 2 angka awal
$nilaiAwal = 0;
$nilaiSekarang = 1;

//tampilkan 2 angka awal
echo "$nilaiAwal $nilaiSekarang";

for ($i = 0; $i < 20; $i++)
{
  // hitung angka yang akan ditampilkan
  $output = $nilaiSekarang + $nilaiAwal;
  echo " $output";

  //siapkan angka untuk perhitungan berikutnya
  $nilaiAwal = $nilaiSekarang;
  $nilaiSekarang = $output;
}

// hasil:
// 0 1 1 2 3 5 8 13 21 34 55 89
?>
