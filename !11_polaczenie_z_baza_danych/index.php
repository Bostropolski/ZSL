<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sklep Papierniczy</title>
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
            echo "<option>",$row['nazwa'],"</option>";
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
  echo round($promocja,2);
}

 ?>
  </body>
</html>
