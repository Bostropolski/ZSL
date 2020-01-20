<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php
$login= $_POST['login'];
$haslo= $_POST['haslo'];

if($login == 'Jan' && $haslo == 'haslo'){
  header('location: admin.php');
}
if($login == 'jan' && $haslo == 'marek'){
  header('location: user.php');
}


 ?>
  </body>
</html>
