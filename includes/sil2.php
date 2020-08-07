<?php

require "../config/database.php";
$gelenid=$_GET["Sil"];
$temizle=mysqli_query($conn,"DELETE FROM isci_bilgi WHERE id='$gelenid'");

header('Location:sil.php');


 ?>
