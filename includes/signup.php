<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  <link rel="stylesheet" href="../CSS/style.css">
    <title>KAYİT OL</title>
  </head>
<script type="text/javascript">
function kontrol(){
  var kadi=document.forms["form"]["kadi"].value;
  var sifre=document.forms["form"]["sifre"].value;
  var email=document.forms["form"]["email"].value;
if (kadi=="") {
alert("Kullanıc Adı Giriniz..");
return false;
}else if (sifre=="") {
alert("Şifre Giriniz..");
return false;
}else if (email=="") {
  alert("Email Giriniz..");
  return false;
}else {
alert("Kayıt Başarılı");
}}
</script>
<body>
    <form name="form" onsubmit="return kontrol()" action="signup.php" method="post">
    <table >
      <tr>
        <td>Kullanıcı Adı:</td><td> <input  type="text" name="kadi" id="kadi">  </td>
      </tr>
      <tr>
        <td>Şifre:</td><td> <input   type="password" name="sifre">  </td>
      </tr>
      <tr>
        <td>E-mail:</td><td> <input   type="text" name="email"> </td>
      </tr>
      <tr>
        <td></td><td> <button  type="submit" name="button">Kayıt Ol </button>  <a id="kayit" href="../index.php">Giriş Yap</a>  </td>
      </tr>
    </table>
  </form>
  </body>
</html>
<?php
if ($_POST) {
  $kadi=$_POST["kadi"];
  $sifre=$_POST["sifre"];
  $email=$_POST["email"];
  header("Location:header.php?kadi=$kadi&sifre=$sifre&email=$email");
}
