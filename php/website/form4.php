<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Contoh Form 4</title>
  </head>
  <body>

    <form action="" method="get">
      <fieldset>


      <legend> Register </legend>
      Nama : <input type="text" name="nama" placeholder="Nama Lengkap" maxlength="50" required> <br>
      Usia : <input type="number" name="usia" placeholder="usia" required> <br>
      <input type="submit" name="kirim" value="Kirim"> &nbsp;
    </form>
    </fieldset>

<?php
    //cek apakah tombol submit dengan nama="kirim" sudah diklik ?
    if(isset($_GET['kirim'])){
      // <!-- ambil dengan name="nama" dan simpan ke variable $nm -->

      $nm = $_GET['nama'];

      // <!-- ambil input dengan name="usia" dan simpan ke variable $umur-->
      $umur = $_GET['usia'];

      echo "Nama Anda $nm";
      echo "<br> Umur $umur";

    }

?>
  </body>
</html>
