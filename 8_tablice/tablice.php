<?php
$colors= array("Red", "Green", "Blue");
$colors[3]= "Magenta";

function ShowArray($colors)
  {
    for ($i=0; $i < count($colors) ; $i++) {
    $j= $i+1;
    echo "Kolor $j: $colors[$i]<br> ";
  }
}
echo ShowArray($colors),"<hr>";
echo "<hr>";echo "<hr>";


#####################################################################

//tablice asociacyjne

$data = array(
  "name" => "Janusz",
  "surname" => "Nowak",
  "age" => 20,
  "country" => "Polska",
 );

 function ShowArrayAssoc($data){
   foreach ($data as $key => $value) {
     echo "$key: $value <br>";
}}
  echo ShowArrayAssoc($data),'<hr>';
  echo "<hr>";echo "<hr>";
  #####################################################################

  //tablice wielowymiarowe

$student = array(
  array("Anna", "Nowak", "Poznań"),
  array("Tomasz"),
  array("Krystyna", "Pawlak"),
  array("Anna", "Pawlak"),
);

//echo $student[2][0];

function ShowArrayMore($student) {
  for ($i=0; $i < count($student) ; $i++) {
    for ($j=0; $j < count($student[$i]) ; $j++) {
      echo $student[$i][$j]," ";

    }
    echo "<br>";
  }
}
echo ShowArrayMore($student);
echo '<hr>';
function student($student){
foreach ($student as $value) {
  foreach ($value as $wartosc) {
    echo "$wartosc ";
  }
  echo "<br>";
}
}

echo student($student);
echo "<hr>";echo "<hr>";echo "<hr>";

/*
  Zad.DOM
  utwożyć tblice 3-wymiarową oraz 5-wymiarową
  napisz do tych tablic funkcje wyświetlające dane
*/

################################################################################################

//sortowanie

$tab = array(10, 1, 15, 20, 100, 8);
function ShowArraySort($tab){
foreach ($tab as $value) {
  echo "$value ";
}
}
ShowArraySort($tab);
echo "<hr>";
//niemalejące
sort($tab);
ShowArraySort($tab);
echo "<hr>";
//nierosnące
rsort($tab);
ShowArraySort($tab);
echo "<hr>";
echo "<hr>";
echo "<hr>";

$tabAssoc = array(
  "name" => "Janusz",
  "surname" => "Nowak",
  "age" => 20,
  "city" => "Poznań",
);

ShowArrayAssoc($tabAssoc);
echo "<hr>";

//sortowanie według wartości niemalejącej

asort($tabAssoc);
ShowArrayAssoc($tabAssoc);
echo "<hr>";

//sortowanie według wartości nierosnąco

arsort($tabAssoc);
ShowArrayAssoc($tabAssoc);
echo "<hr>";

//sortowanie według klucza niemalejąco

ksort($tabAssoc);
ShowArrayAssoc($tabAssoc);
echo "<hr>";

//sortowanie według klucza nierosnąco

krsort($tabAssoc);
ShowArrayAssoc($tabAssoc);
echo "<hr>";

#######################################################################################

//wyświetlanie danych

var_dump($tabAssoc);
echo "<hr>";

print_r($tabAssoc);
echo "<hr>";

echo "<pre>";
print_r($tabAssoc);   //Spoko
echo "</pre>";

echo "<pre>";
var_dump($tabAssoc);  //Źle
echo "</pre>";



 ?>
