<?php
    //cek apakah tombol submit dengan nama="kirim" sudah diklik ?
    if(isset($_POST['kirim'])){
      // <!-- ambil dengan name="nama" dan simpan ke variable $nm -->

      $nm = $_POST['nama'];

      // <!-- ambil input dengan name="usia" dan simpan ke variable $umur-->
      $umur = $_POST['usia'];

      echo "Nama Anda $nm";
      echo "<br> Umur $umur";

    }

?>
