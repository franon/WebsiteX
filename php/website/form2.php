<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Contoh Form 2</title>
  </head>
  <body>

    <form action="" method="post">
      Nama : <input type="text" name="nama" placeholder="Nama Lengkap" maxlength="50" required> <br>
      Usia : <input type="number" name="usia" placeholder="usia" required> <br>
      <input type="submit" name="kirim" value="Kirim"> &nbsp;
    </form>

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
  </body>
</html>
