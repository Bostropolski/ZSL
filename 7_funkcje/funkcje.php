<?php
function value($a)
{
  if ($a<0)
  {
  return 'Ujemna';
  }
  else  if ($a==0)
    {
    return "Równa 0";
    }
  else
  {
      return "Dodatnia";
  }
}
echo value(-1),' ';//Ujemna
echo gettype(value(-1)),' ';//string

function getValue():int{   //jak jest INT to tylko liczby bez , a jak jest FLOAT to może być ,
  return 10.99;
}

echo getValue(),'<br>';//10

#############################################################
//zasięg zmiennych

$x=10;
function show(){
  echo "Wartość zmiennej \$x wynosi: $GLOBALS[x] <br>";
}
show();

#############################################################

$y = 20;
function show1(){
  global $y;
  echo "Wartość zmiennej \$y wynosi: $y<br>";
}
show1();
echo '<br>';

#############################################################

function sum(){
$number = 10;
echo "\$number wynosi: $number<br> ";
$number += 10;
}
sum();
sum();
echo '<br>';

function sum1(){
static $number = 10;
echo "\$number wynosi: $number<br> ";
$number += 10;
}
sum1();//10
sum1();//20
sum1();//30

#############################################################
//Argumenty

function add($x,$y = 1){
  return $x + $y;
}
$z = 3;

echo add(5),'<br>';//6
echo add(5, 10),'<br>';//15
echo add($z),'<br>';//4

#############################################################
//Argumenty i typy danych

function multi(float $x, int $y ){
  return $x*$y;
}

echo multi(3,4),'<br>';




// napisz menu w którym uzydkownik wybiera jedno z działań, wykorzystaj do tego celu pole radio (suma, przedział)
// suma - pobierze dane z 2 pol tekstowych i zapisuje je wykorzystując funkcje suma
// przedział - pobierze dane z 2 pol tekstowych i wyświetli liczby rosnąco z przedziału wykorzystując funkcje przedział



     ?>
