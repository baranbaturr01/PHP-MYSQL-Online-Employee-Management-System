

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <link rel="stylesheet" href="../CSS/style2.css">

    <title></title>
  </head>
  <body>
    <ul>
    <li><a href="ekle.php">İŞÇİ EKLE</a></li>
    <li><a href="duzenle.php">İŞÇİ DÜZENLE</a></li>
    <li><a href="sil.php">İŞÇİ SİL</a></li>
    <li><a href="../index.php">ÇIKIŞ</a></li>
    </ul>
    <?php
    require "../config/database.php";


    $sorgu=mysqli_query($conn,"SELECT * FROM isci_bilgi") or die(mysqli_eror());
    $count=mysqli_num_rows($sorgu);
       ?>
    <table id="personel">
    <tr>
    <th>İd</th>
    <th>Ad</th>
    <th>Soyad</th>
    <th>T.C</th>
    <th></th>
    <th>Telefon No</th>
    <th>Dogum Tarihi</th>
    <th>Cinsiyet</th>
    <th>Giriş Tarihi</th>
    <th>SGK Durumu</th>
    <th>İşlem</th>
    </tr>
<?php
while ($data=mysqli_fetch_row($sorgu)) {
  echo "<tr>";
echo "<td>$data[0]</td><td>$data[1]</td><td>$data[2]</td><td>$data[3]<td/><td>$data[4]</td><td>$data[5]</td><td>$data[6]</td><td>$data[7]</td><td>$data[8]</td>";//tablodaki satır sayısı kadar girecekssin
echo "<td> <a href='ayarla.php?GİT=$data[0]'> GÜNCELLE </a></td>";

  echo "</tr>";

}

 ?>
 </table>
</body>
</html>
