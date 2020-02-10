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
        $_SESSION['num'] = mysqli_num_rows($result);
        echo 'Ilość rekordów w tabeli user ',$_SESSION['num'],'<br><br>';
        if (isset($_SESSION['oldnum'])) {
          if($_SESSION['oldnum']>$_SESSION['num']){
            echo "Dodano nowy rekord";
          }
        }
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
            <td>$row[imie]</td>
            <td>$row[nazwisko]</td>
            <td>$row[data_ur]</td>
            <td><a href="./scripts/del_user.php?id=$row[id]">Usuń</a></td>
          </tr>
ROW;
        }

      }else {
        echo "Błędne zapytanie do bazy";
      }
        ?>

     </table>
     <form action="scripts/add_user.php" method="post"><br><br>
       <input type="text" name="name" value=""><br><br>
       <input type="text" name="surname" value=""><br><br>
       <input type="date" name="birthday"><br><br>
       <input type="submit" name="button" value="Dodaj użydkownika">
     </form>
     <hr><hr>
     <h3>Color</h3>
     <?php
$sql = "SELECT * FROM `color`";
$result = mysqli_query($connect, $sql);
echo <<< COLOR

<table>
  <tr>
    <th>ID</th>
    <th>COLOR</th>


 </tr>
COLOR;
while($row = mysqli_fetch_assoc($result)) {
  echo <<< LINIA

  <tr>
    <td>$row[id]</td>
    <td>$row[color]</td>
  </tr>
LINIA;
}
      ?>
    </table>
      <form action="scripts/add_color.php" method="post"><br><br>
        <input type="text" name="color" placeholder="color"><br><br>
        <input type="submit" name="button" value="Dodaj kolor">
      </form>
  </body>
</html>
