<?php
include "head.php";

?>
<div id="main">
  <?php
    // cek ada parameter $_GET["hal"]

    if (isset($_GET["hal"])) {
      # code...
      switch ($_GET["hal"]) {
        case 'profil': include 'profil.php';break;
        case 'kontak': include 'kontak.php';break;
        default: include '404.php';break;
      }
    }

    else {
      # code...
      #jika tidak ada parameter, panggil home.php
      include 'home.php';
    }

  ?>
</div>

<?php
include 'sidebar.php';
include 'footer.php';

 ?>
