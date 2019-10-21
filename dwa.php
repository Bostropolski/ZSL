<?php
echo <<< FORM

<form method="post">
  <input type="text" name="kolor" placeholder="Kolor : "><br><br>
  <input type="number" name="wiek" placeholder="Wiek : "><br><br>
  <input type="submit" name="button" value="Zatwierdź">
</form>
FORM;
if (isset($_POST['kolor'],$_POST['wiek'])) {
  $kolor = $_POST['kolor'];
  $wiek = $_POST['wiek'];

if ($kolor == null){
  echo "blad";
}
else {
  if ($wiek == null){
    echo "blad";
  }
  else {

  echo "Kolor to: $kolor <br>";
  echo "Wiek to: $wiek <br>";

echo "Dane przed poprawą ", $kolor,'<br>';
echo "i ", ucfirst(strtolower($kolor)),'<br>';

echo "ii ", ucfirst(strtolower(substr($kolor,0,8))),'<br>';

}
}
}

 ?>
