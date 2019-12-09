<?php
/*użytkownik podaje w formularzu: imie,nazwisko,wiek,narodowość
Sprawdź czy przesłał wszystkie dane, jeśli tak to wyświetl mu na stronie cookieSuccess.php
komunikat: przesłany zmienna sesyjną o trści: "prawidłowo przesłany formularz"
imie i nazwisko przypisz dozmiennych sesyjnych
wiek i narodowośc przypisz do zmiennej Cookie
Wyświetl dane na stronie:
cookieSuccess.php w formie:
Imie i Nazwisko: .....
Wiek: .....
Narodowość: ......
Zabezpiecz formularz przed podaniem danych, które będą mieć więcej niż 10 znaków
*/
 ?>
 <!DOCTYPE html>
 <html lang="pl" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <form method="post">
       <input type="text" name="Imie" placeholder="Podaj imie:">
       <input type="text" name="Nazwisko" placeholder="Podaj nazwisko">
       <input type="number" name="Wiek" placeholder="Podaj wiek:">
       <input type="text" name="Narodowość" placeholder="Podaj narodowość:">
     </form>
     <?php
If(!empty($_POST["Imie"])&& ($_POST["Nazwisko"])&& ($_POST["Wiek"])&& ($_POST["Narodowość"]) ){
 $imie=$_POST[Imie];
$nazwisko=$_POST[Nazwisko];
$wiek=$_POST[Wiek];
$narodowosc=$_POST[Narodowość];
$dl1=strlen ($imie);
$dl2=strlen ($nazwisko);
$dl3=strlen ($narodowosc);

if(dl1<11 && dl2<11 && dl3<11){
 session_start();
  $_SESSION["name"]= $imie," ",$nazwisko;
setcookie ("wiek",$wiek);
setcookie ("narodowosc",$narodowosc);
}
}

      ?>
<a href="./cookieSuccess.php">Strona cookieSucces</a>
   </body>
 </html>
