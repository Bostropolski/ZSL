<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php
function jeden(){
echo <<< LOL
<form method="post" id="xd">
<input type="number" name="liczba" placeholder="Podaj ile osób:">
<input type="submit" name="button" value="Zatwierdź">
</form>
LOL;
}
echo jeden();
if(!empty($_POST['liczba'])){
  $liczba= $_POST['liczba'];
  $GLOBALS['liczba'];
}
$i=0;

while($i<$liczba)
{
  echo <<< FORM
          <form method="post">
          <input type="text" name="imie" placeholder="Podaj imie osób:">
        </form>
FORM;
          if(!empty($_POST['imie'])){
          $imie= $_POST['imie'];
          $ludzie = array($imie);
        }
$i++;
}
function ShowArray($imie)
  {
    for ($i=0; $i < count($imie) ; $i++) {
    $j= $i+1;
    echo "osoba $j: $imie[$i]<br> ";
  }
}
     ?>
  </body>
</html>
