<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="CSS/style.css">
    <title>GİRİŞ</title>
  </head>
  <body>
    <script type="text/javascript">
    function kontrol() {
var kadi=document.forms["form"]["kadi"].value;
var sifre=document.forms["form"]["sifre"].value;
if (kadi=="") {
  alert("Kullanıcı Adı Giriniz...");
return false;
}
else if (sifre=="") {
alert("Şifre Giriniz...");
return false;
} }
    </script>
      <form  name="form" onsubmit="return kontrol()" action="index.php" method="post">
      <table align="center" background="#ccc">
        <tr>
          <td>Kullanıcı Adı:</td><td> <input type="text" name="kadi" id="kadi">  </td>
        </tr>
        <tr>
          <td>Şifre:</td><td> <input type="password" name="sifre" id="sifre">  </td>
        </tr>
        <tr>
          <td></td><td> <button type="submit" name="button"  style="cursor:pointer">Giriş Yap </button>  <a id="kayit" href="includes/signup.php">Kayıt Ol</a></td>
        </tr>
      </table>
    </form>
  </body>
</html>
<?php
if ($_POST) {
  $kadi=$_POST["kadi"];
  $sifre=$_POST["sifre"];
  header("Location:includes/admingiris.php?kadi=$kadi&sifre=$sifre");}
 ?>
