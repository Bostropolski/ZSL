<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <style media="screen">
      tr,td{
          border: solid 1px grey;
      }
    </style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="potwierdzenie.php" method="post">
<input type="text" name="login" placeholder="podaj login">
<input type="password" name="haslo" placeholder="podaj haslo">
<input type="submit" name="button" value="wyslij">
    </form>
    <?php
    $miasto = $_POST['miasta'];
    $color = $_POST['color'];

    $dane = array(
      'Kolor' => $color,
      'Miasto' => $miasto);
session_start();
$_SESSION['color']=$color;
$_SESSION['miasto']=$miasto;
    foreach ($dane as $key => $value) {
      echo <<< XD
      <table>
        <tr>
            <td>$key</td>
            <td>$value</td>
        </tr>

      </table>
XD;
    }
setcookie ('jan','poznan',time()+(2*24*60*60));
     ?>

  </body>
</html>
