<?php

$nim = "1711500411";

//potong nim mulai dari index ke 2 sebanyak 2 karakter;

$kaprodi = substr($nim, 2,2);
switch ($kaprodi) {
  case '11':
    $prodi = "TI";
    break;

  case '12':
    $prodi = "SI";
    break;

  case '13':
    $prodi = "SK";
    break;

  default:
    $prodi = "BUKAN MAHASISWA TEKNIK";
    break;
}

echo "Kamu dengan $nim adalah Mahasiswa $prodi";


?>
