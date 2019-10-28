<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/6_pętle.css">
    <title>pętle</title>
  </head>
  <body>
    <table>
    <?php
    $wiersz = 1;
    $sum = 0;
    $x = 7;
    do {
    $kolumna = 1;
    echo '<tr>';

      do {
        $c = $wiersz * $kolumna;
        $sum = $c + $sum;
        if ($kolumna+$wiersz==$x+1)
          {
            echo '<td class="red">',$c,'</td>';
          }
        else
        {
        if ($wiersz==$kolumna)
          {
            echo '<td class="blue">',$c,'</td>';
          }
        else
          {
            echo '<td>',$c,'</td>';
          }
          }
        $kolumna++;

} while ($kolumna <= $x);
    $d = $c * $kolumna;
    $wiersz++;
    echo '</tr>';


} while ($wiersz <= $x);
     ?>
   </table>
<?php
echo $sum ;
?>

  </body>
</html>
