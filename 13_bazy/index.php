<?php
  session_start();
 ?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Połączenie z bazą</title>
  </head>
  <body>
    <h3>Tabela user</h3>
    <?php
      if (isset($_SESSION['message'])) {
        echo $_SESSION['message'],'<br><br>';
      }
      require_once('./connect.php');


      //$sql = "select * from user where name =\"Adan\"";
      $sql = "select * from user";

      if ($result = mysqli_query($connect, $sql)) {
        //echo "Prawidłowe zapytanie do bazy";
        echo <<< TAB

        <table>
          <tr>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>Data urodzenia</th>

         </tr>
TAB;
        while($row = mysqli_fetch_assoc($result)) {
          echo <<< ROW

          <tr>
            <td>$row[name]</td>
            <td>$row[surname]</td>
            <td>$row[birthday]</td>
            <td><a href="./scripts/del_user.php?id=$row[id]">Usuń</a></td>
          </tr>
ROW;
        }

      }else {
        echo "Błędne zapytanie do bazy";
      }
        ?>

     </table>
     <form action="add_user.php" method="post"><br><br>
       <input type="text" name="name" value=""><br><br>
       <input type="text" name="surname" value=""><br><br>
       <input type="date" name="birthday"><br><br>
       <input type="submit" name="button" value="Dodaj użydkownika">
     </form>
  </body>
</html>
