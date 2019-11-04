<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post">
      <input type="number" name="x" placeholder="Liczba1">
      <input type="number" name="y" placeholder="Liczba2">
      <input type="radio" name="dzialanie" value="s">suma
      <input type="radio" name="dzialanie" value="p">przedział
      <input type="submit" name="button" value="Zatwierdź">
    </form>
    <?php
    // napisz menu w którym uzydkownik wybiera jedno z działań, wykorzystaj do tego celu pole radio (suma, przedział)
    // suma - pobierze dane z 2 pol tekstowych i zapisuje je wykorzystując funkcje suma
    // przedział - pobierze dane z 2 pol tekstowych i wyświetli liczby rosnąco z przedziału wykorzystując funkcje przedział
    if(!empty($_POST['x']) && !empty($_POST['y']) && !empty($_POST['dzialanie'])){
    $x = $_POST['x'];
    $y = $_POST['y'];
    $dzialanie = $_POST['dzialanie'];
    switch ($dzialanie) {
      case 's':
        $dzialanie = 'suma';
        $cos = 1;
        break;
      case 'p':
        $dzialanie = 'przedział';
        $cos = 2;
        break;
    }
    echo $dzialanie,'<br>';
    function sum($x,$y){
      return $x+$y;
    }
      function prz($x,$y){
        while ($x <= $y) {
          echo $x;
          $x++;
        }
      }
      if ($cos == 1 )
      {
      echo sum($x,$y),'<br>';
    }else
      echo prz($x,$y);

  }
     ?>
  </body>
</html>
