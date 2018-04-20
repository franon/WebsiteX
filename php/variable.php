<h3>Contoh Penggunaan Variable, Constanta dan Opertator</h3>
<?php
$barang = "tas sekolah"; //string
$harga_satuan = 50000; //int
$qty = 3;
$status = true; //boolean
define ("DISKON", 0.1); //konstanta tipe data float

echo "Nama Barang : $barang <br>";
echo "Qty : $qty <br>";
echo "Harga Satuan : ".$harga_satuan."<br>";

$hargasblm = $qty * $harga_satuan;
$diskonnya = DISKON * $hargasblm;
$total = $hargasblm - $diskonnya;

echo "Harga Sebelum Diskon : $hargasblm <br>";
echo "Diskonnya : Diskonnya <br>";
echo "<b>yang kamu bayar : $total </b>";





 ?>
