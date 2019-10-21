<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/5_form.css">
    <title>formularz</title>
  </head>
  <body>

    <?php
    require_once './5.1_form.php';

      if(!empty($_POST['city']) && !empty($_POST['name']) && !empty($_POST['adres']))
       {
        $city= $_POST['city'];
        $name= $_POST['name'];
        $addres= nl2br($_POST['adres']);
        $school= $_POST['szkola'];
      //  echo $city;

      require_once './5.2_form.php'
?>
<table>
  <tr>
    <th>Imie</th>
    <th>Miasto</th>
    <th>Adres</th>
    <th>Szkoła</th>
  </tr>
  <tr>
    <td><?php echo $name; ?></td>
    <td><?php echo $city; ?></td>
    <td><?php echo $addres; ?></td>
    <td><?php echo $school; ?></td>
  </tr>
</table>
<?php

  //      echo "Miasto: $city",'<br>';
    //    echo "Imię: $name";
}
     ?>
  </body>
</html>
