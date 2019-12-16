<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sklep Papierniczy</title>
    <link rel="stylesheet" href="../css/form.css">
  </head>
  <body>


    <?php
      //skrypt1

      $sql = "SELECT `nazwa` FROM `towary` WHERE `promocja`=1";

      $connect = mysqli_connect("localhost","root","","sklep");

      $rezultat = mysqli_query($connect,$sql);

      echo "<ul>";
      while ($row = mysqli_fetch_assoc($rezultat)) {
        echo "<li>", $row["nazwa"],"</li>","<br>";
      }
      echo "</ul>";


     ?>
     <form method="post">
       <select name="towar">

         <?php
          $sql = "SELECT nazwa FROM `towary`";
          $rezultat = mysqli_query($connect,$sql);

          while ($row = mysqli_fetch_assoc($rezultat)){
            echo "<option value=\"$row[nazwa]\">$row[nazwa],</option>";
          }
          mysqli_close($connect);
          ?>
       </select>
       <input type="submit" name="button" value="Wyślij">
     </form>
<?php
//skrypt2
if (isset($_POST['towar']))
{

  $towar= $_POST['towar'];
  echo $towar;

  $connect = mysqli_connect("localhost","root","","sklep");
  $sql = "SELECT `cena` FROM `towary` WHERE `nazwa`=\"$towar\"";

  $result = mysqli_query($connect,$sql);

  $row = mysqli_fetch_assoc($result);

  $promocja = $row['cena'] * 0.85;
  echo "<br>";
  echo round($promocja,2),"<hr>";
}

  // wyświetlenie tabeli z produktem
  $sql = "SELECT * FROM `towary` WHERE nazwa=\"$towar\"";
  $result = mysqli_query($connect,$sql);
  $row = mysqli_fetch_assoc($result);
  ?>
<table>
  <tr>
    <th>Nazwa</th>
    <th>Cena</th>
    <th>Promocja</th>
    <th>Dostawca</th>
  </tr>
  <tr>
    <?php
      echo <<<ROW
      <td>$row[nazwa]</td>
      <td>$row[cena]</td>
      <td>$row[promocja]</td>
      <td>$row[idDostawcy]</td>
ROW;
     ?>
  </tr>
</table>



  <?

mysqli_close($connect);
 ?>
  </body>
</html>
