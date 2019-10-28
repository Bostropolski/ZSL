<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post">
      <input type="text" name="name" placeholder="Imie:"><br><br>
      <input type="number" name="wiek" placeholder="Wiek:"><br><br>
      <input type="submit" name="button" value="Zatwierdź">
    </form>
    <?php
    if (!empty($_POST['name']) && !empty($_POST['wiek']) ) {
      $name= $_POST['name'];
      $wiek= $_POST['wiek'];

    $szkoly = "ZSK,ZSŁ";
    $litery = array('Z','S','K','Ł',',');
    $newlitery = array('#','#','#','#','#');

    echo " Dane przed sprawdzeniem: $szkoly <br>" ;
    $newszkoly = str_replace($litery,$newlitery,$szkoly);
    echo "Prawidłowe dane: $newszkoly <br>";

echo 'Dane przed poprawą ',$name, ' Ilość znakó imię:'  ;
echo strlen($name);
$name2 = trim($name);
echo 'Dane po poprawą ',$name2, ' Ilość znakó imię:'  ;
echo strlen($name2);



}
     ?>
     <table style="border: 1px solid">
       <tr>
         <th>Imie</th>
         <th>Wiek</th>
         <th>Ilość znaków</th>
       </tr>
       <tr>
         <td><?php echo $name?></td>
         <td><?php echo $wiek?></td>
         <td><?php echo strlen($name2)?></td>
       </tr>
     </table>
  </body>
</html>
