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
if($liczba>0) {
  ob_clean();

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
echo <<< TEXT
<form method="post">
<input type="submit" name="button" value="Zatwierdź">
</form>
TEXT;


function ShowArray($imie)
  {
    for ($i=0; $i < count($ludzie) ; $i++) {
    $j= $i+1;
    echo "osoba $j: $imie[$i]<br> ";
  }
}
}
if($j>1){
  ob_clean();
  echo ShowArray($imie);

}
     ?>
  </body>
</html>
