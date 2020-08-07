
<?php

require "../config/database.php";
  $gelenid =$_GET['GİT'];

$veri=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM isci_bilgi WHERE id='$gelenid'"));

$i_adi=$veri['i_adi'];
$i_soyad=$veri["i_soyad"];
$i_tc=$veri["i_tc"];
$i_tel=$veri["i_telefon"];
$i_dogum=$veri["i_dogum"];
$cinsiyet=$veri["i_cinsiyet"];
$i_giris=$veri["i_giris"];
$i_sgk=$veri["i_sgk"];

echo "

<!DOCTYPE html>
<html lang='en' dir='ltr'>
  <head>
    <meta charset='utf-8'>
  <link rel='stylesheet' href='../CSS/style.css'>
    <title>İşçi Güncelle</title>
  </head>
  <body>
  <script type='text/javascript'>

  function kontrol() {
var isim=document.forms['form']['i_adi'].value;
var soyad=document.forms['form']['i_soyad'].value;
var tc=document.forms['form']['i_tc'].value;
var tel=document.forms['form']['i_tel'].value;
var dogum=document.forms['form']['i_dogum'].value;
var cinsiyet=document.forms['form']['cinsiyet'].value;

if (isim=='') {
alert('isim boş bırakılamaz');
return false;
}
else if (soyad=='') {
alert('Soyad boş bırakılamaz');
return false;
}
else if (tc=='' ) {
alert('Tc boş bırakılamaz');
return false;

}
else if (tel=='') {
alert('Telefon No boş bırakılamaz');
return false;
}
else if (dogum=='') {
alert('Dogum Tarihi boş bırakılamaz');
return false;
}
else if (cinsiyet=='') {
alert('Cinsiyet Belirtiniz');
return false;
}
else {
return alert('Güncelleme Başarılı');
}
    }
  </script>

    <form name='form' onsubmit='return kontrol()' action='yenile.php?GİT=$gelenid' method='post'>
    <table >
      <tr>
        <td>İşçi Adı:</td><td> <input  type='text' name='i_adi' value='$i_adi'>  </td>
      </tr>
      <tr>
        <td>İşçi Soyadı:</td><td> <input   type='text' name='i_soyad' value='$i_soyad'>  </td>
      </tr>
      <tr>
        <td>TC:</td><td> <input   type='number' name='i_tc' value='$i_tc'> </td>
      </tr>
      <tr>
        <td>Telefon No:</td><td> <input   type='text' name='i_tel' value='$i_tel'> </td>
      </tr>
      <tr>
        <td>Dogum Tarihi:</td><td> <input   type='date' name='i_dogum' value='$i_dogum'> </td>
      </tr>
      <tr>
        <td>İşe Giriş:</td><td><input type='date' name='i_giris' id='i_giris' value='$i_giris'>  </td>
      </tr>
      <tr>
        <td >SGK:</td><td id='boyut'> <input type='checkbox' name='i_sgk' value='$i_sgk' id='sgk'><td> <label id='lbl'>Yapıldı </label></td> </td>
        <td> <input  type='checkbox' name='i_sgk' id='sgk2' value='$i_sgk'> <td> <label id='no' >Yapılmadı </label></td> </td>
      </tr>
      <tr>
        <td>Cinsiyet:</td><td>
          <select name='cinsiyet' value='$cinsiyet'>
          <option value='sec' selected>--Sec--</option>
          <option value='Erkek'>Erkek</option>
          <option value='Kadın'>Kadın</option>
       </select>
            </td>
      </tr>
      <tr>
        <td></td><td> <button  type='submit' name='button'>GÜNCELLE </button>  <a href='girisvekayit.php'>GERİ</a></td>
      </tr>
    </table>
  </form>

  </body>
</html>
"; ?>
