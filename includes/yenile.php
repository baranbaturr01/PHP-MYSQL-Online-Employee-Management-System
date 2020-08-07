<?php


require "../config/database.php";


 $gelenid =$_GET['GİT'];

 $i_adi=$_POST["i_adi"];
 $i_soyad=$_POST["i_soyad"];
 $i_tc=$_POST["i_tc"];
 $i_tel=$_POST["i_tel"];
 $i_dogum=$_POST["i_dogum"];
 $cinsiyet=$_POST["cinsiyet"];

$guncelle=mysqli_query($conn,"UPDATE isci_bilgi SET i_adi='$i_adi',i_soyad='$i_soyad',i_tc='$i_tc',i_telefon='$i_tel',i_dogum='$i_dogum',i_cinsiyet='$cinsiyet' WHERE id='$gelenid' ");
if ($guncelle) {
header('location:duzenle.php');
}
else {
  echo "BAŞARISIZ";
}

 ?>
