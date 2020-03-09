<?php
class Animal{
  public $name;

  function __construct($name){
    $this->name=$name;
    }
  function __destruct(){
    echo "<br>Wywołanie destruktora</br>";
  }
}
$kot = new Animal("Puszek");
echo $kot->name;
unset($kot);
echo "<br>Text</br>";
echo "<br>Text</br>";
 ?>
