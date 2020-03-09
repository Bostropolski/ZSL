<?php

class Person{
  public $name;
  public $surname;
  public $city;

  function __construct($name,$surname,$city){
  $this->name=$name;
  $this->surname=$surname;
  $this->city=$city;
}

function getALL(){
  echo <<<X
<hr>
Imie:$this->name <br>
Nazwisko:$this->surname <br>
Miasto:$this->city <br>

X;
}
}

$osoba= new Person("Janusz","Nowak","Gniezno");
$osoba->getALL();
 ?>
