1 + 2 = 
<?php
$angka1 = 1;
$angka2 = 2;
$penjumlahan = $angka1 + $angka2;
$x = $angka1 * $angka2;
$bagi = $angka1 / $angka2;
$peng = $angka1 - $angka2;

echo $angka1 . "+" . $angka2 . "=" . $penjumlahan;
echo "<br> $angka1 x $angka2 = $x";
echo "<br> $angka1 / $angka2 = $bagi";
print "<br> $angka1 - $angka2 = $peng";
echo "<br> $angka1 <sup> $angka2 </sup> = "; //sup perpangkatan
echo pow($angka1,$angka2); // perpangkatan di php
echo "<br>";
echo pow (3,5); //angka 1 itu dasar angka 2 eksponen
?>