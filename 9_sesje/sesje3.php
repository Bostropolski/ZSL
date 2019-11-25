<?php
  session_start();//musi być na każdej stronie
  unset($_SESSION['name']);//usuwa zmienną sesyjną
  session_destroy();//znika Identyfikator sesji
 ?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sesja 3</title>
  </head>
  <body>
    Trzecia strona<hr>
    Witaj
    <?php
    echo $_SESSION['name']
     ?>
      na stronie!<br>
    <?php
    echo "Identyfikator sesji: ", session_id(),"<br>";
      ?>
      <a href="./sesje1.php">Strona startowa</a>
  </body>
</html>
