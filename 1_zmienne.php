<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    //wersja php
      //echo PHP_VERSION

    $name = 'Janusz';
      echo "Twoje imię: $name<br>";
      echo "Twoje imię:",$name,'<br>';
      echo "Twoje imię:".$name.'<br>';
      echo "Twoje imię: $name",'<br>';

      //systemy liczbowe
      $x = 10;
      $hex = 0xA;
      $oct = 021;
      $bin = 0b1011;

      echo $hex; //10
      echo $oct; //17
      echo $bin,'<hr>'; //11

//heredoc

  $name = 'Anna';
  $surname = 'Kowal';

  $x = <<< ETYKIETA
    Heredoc<br>
    Imię: $name<br>
    Nazwisko: $surname<br>
ETYKIETA;

  echo $x;
//nowdoc

echo <<< 'E'
  Nowdoc<br>
  Imię: $name<br>
  Nazwisko: $surname<br>
E;

  $x = 20;
  echo "Nazwa zmiennej: \$x ma wartość $x";

/*
  najszybszy heardoc -> .
*/

     ?>
  </body>
</html>
