<?php
  $potęga = 2 ** 10;
  echo $potęga,'<hr>'; //1024

  $a =1;
  $b =1.0;

  if ($a == $b)
  {
  echo "$a jest równa $b<br>";
}else {
  echo "$a nie jest równa $b<br>";
}

//sprawdzamy również typ danych

  if ($a === $b)
  {
  echo "$a jest identyczna $b<br>";
}else {
  echo "$a nie jest identyczna $b<br>";
}

echo gettype($a),'<br>'; //integer
echo gettype($b),'<hr>'; //double


$x=1;
$y=1;
$result=$x<=>$y;
echo $result,'<br>'; //0 - oznacza że wartość jest równa 1 - oznacza że wartość po lewej jest większa  -1 - oznacza że wartość po prawej jest większa

####################################################

$x = 2;
echo $x++; //2
echo ++$x; //4
echo $x; //4
$y = $x++;
echo $y; //4
$y = ++$x;
echo $y; //6
echo ++$y,'<hr>'; //7

####################################################
//operatory rzutowania
//bool, int, float, string, array, object, unset

  $text1 = '123abc';
  $text1 = (int)$text1;
  echo $text1,'<br>'; //123

  $text2 = 12;
  $text2 = (bool)$text2;
  echo $text2,'<br>'; //1 - true, nic nie wyświetli - false
  echo gettype($text2),'<br>'; //boolean

  $text3 = 123;
  $text3 = (unset)$text3;
  echo $text3,'<br>'; //
  echo gettype($text3),'<br>'; //NULL

  ####################################################

  $x = 10;
  echo is_string($x);//false
  echo is_bool($x);//false
  echo is_float($x);//false
  echo is_int($x);//true -> 1
  echo is_null($x),'<hr>';//false

  //@ operator ignorowania błędu
  $w;
  echo @gettype($w),'<hr>';//null

  ####################################################
  //zmienne super globalne
  //$_GET, $_POST, $_COOKIE, $_FILES, $_SESSION, $_SERVER
echo $_SERVER['SERVER_PORT'],'<br>';//80
echo $_SERVER['SERVER_NAME'],'<br>';//127.0.0.1
echo $_SERVER['SCRIPT_NAME'],'<br>';///3b3t/2_operacje_na_zmiennych.php
echo $_SERVER['SERVER_PROTOCOL'],'<br>';//HTTP/1.1
echo $_SERVER['DOCUMENT_ROOT'],'<hr>';//C:/xampp/htdocs


//Można łączyć kilka ze sobą:  $localFiles = $_SERVER['DOCUMENT_ROOT'].$_SERVER['SCRIPT_NAME'];
$localFiles = $_SERVER['DOCUMENT_ROOT'];
$localFiles .= $_SERVER['SCRIPT_NAME'];

echo $localFiles,'<hr>';

####################################################
//stałe
//nazwy z dużych liter !

define('NAZWISKO','KOWALSKI');
echo NAZWISKO,'<br>';

define('imię','Janusz');
echo imię,'<br>';

define('SURNAME','Nowak', true); //w 8 wersji PHP brak 3 argumentu    true pododuje że nie przejmujemy się wielkością liter
echo SURnAme,'<hr>';

####################################################
//stałe predefiniowane

echo PHP_VERSION,'<br>'; //7.1.30
echo gettype(PHP_VERSION),'<br>'; //string

if (PHP_VERSION > 5.6)
  echo 'Nowa wersja PHP','<br>';
else {
  echo "Stara wersja PHP",'<br>';
}

echo PHP_OS,'<br>';
echo __LINE__,'<br>';
echo __FILE__,'<br>';
echo __DIR__,'<br>';









 ?>
