<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/6_pętle.css">
    <title>Pętle</title>
  </head>
  <body>
    <form method="post">
      <input type="text" name="max" placeholder="Podaj zakres:">
      <input type="submit" name="button" value="Zatwierdź"><br><br>
    </form>
    <table>
    <?php
    if (!empty($_POST['max'])) {
      $max = $_POST['max'];
    $wiersz = 1;
    $sum = 0;
    do {
    $kolumna = 1;
    echo '<tr>';

      do {
        $c = $wiersz * $kolumna;
        if ($kolumna+$wiersz==$max+1)
          {
            echo '<td class="red">',$c,'</td>';
            $sum=$sum+$c;
          }
        else
        {
        if ($wiersz==$kolumna)
          {
            echo '<td class="blue">',$c,'</td>';
            $sum=$sum+$c;
          }
        else
          {
            echo '<td>',$c,'</td>';
          }
          }
        $kolumna++;

} while ($kolumna <= $max);
    $d = $c * $kolumna;
    $wiersz++;
    echo '</tr>';


} while ($wiersz <= $max);
}
echo $sum;
     ?>
   </table>
  </body>
</html>
