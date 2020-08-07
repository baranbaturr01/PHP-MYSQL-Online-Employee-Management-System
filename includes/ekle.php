<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  <link rel="stylesheet" href="../CSS/style.css">
    <title>İŞÇİ EKLE</title>
  </head>
  <body>
    <div class="girismenu">
      <div class="girismenu1">
        <script type="text/javascript">

        function kontrol() {
    var isim=document.forms["form"]["i_adi"].value;
    var soyad=document.forms["form"]["i_soyad"].value;
    var tc=document.forms["form"]["i_tc"].value;
    var tel=document.forms["form"]["i_tel"].value;
    var dogum=document.forms["form"]["i_dogum"].value;
    var cinsiyet=document.forms["form"]["cinsiyet"].value;

    if (isim=="") {
      alert("isim boş bırakılamaz");
return false;
    }
    else if (soyad=="") {
  alert("Soyad boş bırakılamaz");
  return false;
    }else if (tc=="") {
  alert("Tc boş bırakılamaz");
  return false;
    }else if (tel=="") {
  alert("Telefon No boş bırakılamaz");
  return false;
    }else if (dogum=="") {
  alert("Dogum Tarihi boş bırakılamaz");
  return false;
    }else if (cinsiyet=="") {
  alert("Cinsiyet Belirtiniz");
  return false;
}else {
  return alert("Kayıt Başarılı");
}
          }
        </script>
    <form name="form" onsubmit="return kontrol()" action="" method="post">
    <table >
      <tr>
        <td>İşçi Adı:</td><td> <input  type="text" name="i_adi" id="i_adi">  </td>
      </tr>
      <tr>
        <td>İşçi Soyadı:</td><td> <input   type="text" name="i_soyad" id="i_soyad">  </td>
      </tr>
      <tr>
        <td>TC:</td><td> <input   type="number" name="i_tc" id="i_tc"> </td>
      </tr>
      <tr>
        <td>Telefon No:</td><td> <input   type="text" name="i_tel" id="i_tel"> </td>
      </tr>
      <tr>
        <td>Dogum Tarihi:</td><td> <input   type="date" name="i_dogum" id="i_dogum"> </td>
      </tr>
    <tr>
      <td>İşe Giriş:</td><td><input type="date" name="i_giris" id="i_giris">  </td>
    </tr>
    <tr>
      <td >SGK:</td><td id="boyut"> <input type="checkbox" name="i_sgk" value="Yapildi" id="sgk"><td> <label id="lbl">Yapıldı </label></td> </td>
      <td> <input  type="checkbox" name="i_sgk" id="sgk2" value="Yapilmadi"> <td> <label id="no" >Yapılmadı </label></td> </td>
    </tr>
      <tr>
        <td>Cinsiyet:</td><td>
          <select name="cinsiyet" id="cinsiyet">
          <option value="sec" selected>--Sec--</option>
          <option value="Erkek">Erkek</option>
          <option value="Kadın">Kadın</option>
       </select>
            </td>
      </tr>
      <tr>
        <td></td><td> <button  type="submit" name="button" style="cursor:pointer">EKLE </button>  <a href="girisvekayit.php">GERİ</a></td>
      </tr>
  </table>
  </form>
</div></div>
  </body>
</html>

<?php

require "../config/database.php";

if ($_POST) {
  $i_adi=$_POST["i_adi"];
  $i_soyad=$_POST["i_soyad"];
  $i_tc=$_POST["i_tc"];
  $i_tel=$_POST["i_tel"];
  $i_dogum=$_POST["i_dogum"];
  $cinsiyet=$_POST["cinsiyet"];
  $i_giris=$_POST["i_giris"];
  $i_sgk=$_POST["i_sgk"];


  $sql = mysqli_query($conn,"INSERT INTO isci_bilgi(i_adi, i_soyad, i_tc, i_telefon, i_dogum,i_giris,i_sgk ,i_cinsiyet) VALUES ('$i_adi', '$i_soyad', '$i_tc', '$i_tel', '$i_dogum','$i_giris','$i_sgk', '$cinsiyet')");

}
?>
