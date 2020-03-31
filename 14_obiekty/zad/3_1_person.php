<?php

class Person{
  public $name;
  public $surname;
  public $data;
  public $country;

  function __construct($name=null,$surname=null,$data=null,$country=null){
  $this->name=$name;
  $this->surname=$surname;
  $this->data=$data;
  $this->country=$country;
}

function getALL(){
  echo <<<X
<hr>
Imie i Nazwisko:$this->name $this->surname <br>
Data urodzenia:$this->data <br>
Kraj:$this->country <br>

X;
}
  function __destruct(){

  }
}

$osoba= new Person("Janusz","Nowak","22-4-1286","Polska");
$osoba->getALL();
 ?>
