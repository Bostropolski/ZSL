<?php
  echo <<< FORM

  <form method="post">
    <input type="text" name="imie" placeholder="Wpisz imię"><br><br>
    <input type="submit" name="button" value="Zatwierdź">
  </form>

FORM;
// GET szybszy od POST i GET przenosi dalej

  if (isset($_POST['imie'])) {     //isset strawdza czy istnieje zmienna $_POST
  $imię = $_POST['imie'];          //pod zmienną $imię podpisuję zmienną $_POST aby nie pisać tak dużego kodu
  echo "Dane przed poprawą ", $imię,'<br>';

// zamiana na małe litery
echo strtolower($imię),'<br>';

// zamiana na duże litery
echo strtoupper($imię),'<br>';

// zamiana pierwszej litery za dużą
echo ucfirst($imię),'<br>';

// zamiana pierwszej litery za dużą w każdym słowie
echo ucwords($imię),'<br>';

// zamiana na małe litery a pierwsza na dużą
echo ucfirst(strtolower($imię)),'<br>';

###################################################################################################


$lorem= 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

echo $lorem,'<br>';
$col = wordwrap($lorem,40,'<hr>');
echo $col;

//czyszczenie zawwartości bufora
ob_clean();
/*echo <<< FORM

<form method="post">
  <input type="text" name="imie" placeholder="Wpisz imię"><br><br>
  <input type="submit" name="button" value="Zatwierdź">
</form>

FORM;
if (isset($_POST['imie'])) {
$imię = $_POST['imie'];*/

###################################################################################################


//usuwanie białych znakówarning

$name='Tomasz';
$name1='  Tomasz ';

echo "Długość zmiennej $name ",strlen($name),'<br>';//6
echo "Długość zmiennej $name1 ",strlen($name1),'<br>';//9

echo strlen(ltrim($name1)),'<br>';//7
echo strlen(rtrim($name1)),'<br>';//8
echo strlen(trim($name1)),'<br>';//6

//przeszukiwanie ciągów znaków

$address = 'Poznań ul. Przełajowa 4, tel. (61) 123-45-67';
$search = strstr($address, 'tel.');
echo $search,'<br>';// tel. (61) 123-45-67

$address = 'Poznań ul. Przełajowa 4, tel. (61) 123-45-67';
$search = strstr($address, 'tel.', true);
echo $search,'<br>';// Poznań ul. Przełajowa 4,

$address = 'Poznań ul. Przełajowa 4, tel. (61) 123-45-67';
$search = stristr($address, 'tel.');
echo $search,'<br>';// tel. (61) 123-45-67

echo strstr('zsl@gmail.com','@'),'<br>';//@gmail.com
echo strstr('zsl@gmail.com',64),'<br>';//@gmail.com  //ASCII @ - 64

//pozycje

$pos = strpos('abcdefg','cde');
echo $pos,'<br>'; //2

$pos = strpos('abcab','ab');
echo $pos,'<br>'; //0


/*
sprawdź czy ciąg o nazwie text2 znajduje się w ciągu text1
*/

$text1 = "abcdabcd";
$text2 = "ab";

if (strpos($text1,$text2) === false ){  // index 0 jest uznawany za false więc zamiast == tzreba użyć ===
  echo "Ciąg $text2 nie został znaleziony w ciągu $text1",'<br>';
}
else{
  echo "Ciąg $text2 został znaleziony w ciągu $text1",'<br>';
}

//przetważanie ciągu znaków

$replace = str_replace('zsl','szkoła','zsl ul. Przełajowa 4');
echo $replace,'<br>';

//substr

echo substr('Janusz Kowalski',3),'<br>'; //usz Kowalski
echo substr('Janusz Kowalski',-3),'<br>'; //ski
echo substr('Janusz Kowalski',7,5),'<br>'; //Kowal
echo substr('Janusz Kowalski',7,-3),'<br>'; //Kowal


//zamiana polskich znakówarning

$login = 'żąkil';
$censore = array('ą','ę','ś','ć','ż','ź','ó','ń','ł');
$replace = array('a','e','s','c','z','z','o','n','l');

$newLogin = str_replace($censore,$replace,$login);

echo $newLogin,'<hr>';

$text = <<< TEXT
zsl - Zespół
Szkół
Łączności
TEXT;

echo "Przed wywołaniem funkcji nl2br: <br>$text";  // Wypisuje wszystko łącznie
echo "<br> Po wywołaniu funkcji nl2br: <br>"; // Dodaje nam wszędzie <br> a nie wypisuje łącznie
echo nl2br($text);




  }
 ?>
