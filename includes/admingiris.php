<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      include "../config/database.php";

      $kadi=$_GET["kadi"];
      $sifre=$_GET["sifre"];
      $result = mysqli_query($conn,"SELECT * FROM admin WHERE k_adi='$kadi' AND sifre='$sifre' LIMIT 1");
      $num_rows = mysqli_num_rows($result);

      if ($num_rows > 0) {
        include "girisvekayit.php";
      }
      else {
        echo "Kayit Yok..";
        header("Location:../index.php");

      }
     ?>
  </body>
</html>
