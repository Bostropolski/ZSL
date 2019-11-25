<?php
  session_start();//musi być na każdej stronie
 ?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sesja 2</title>
  </head>
  <body>
    Druga strona<hr>
    Witaj
    <?php
    echo $_SESSION['name']
     ?>
      na stronie!<br>
    <?php
    echo "Identyfikator sesji: ", session_id(),"<br>";
      ?>
      <a href="./sesje3.php">Trzecia strona</a>
  </body>
</html>
