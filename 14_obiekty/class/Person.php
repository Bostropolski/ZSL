<?php
class Person{
  public $name;
  public $surname;
  public $city;
  public $date;

function setName($name){
$this->name=$name;
}
function setSurname($surname){
$this->surname=$surname;
}
function setCity($city){
$this->city=$city;
}
function setDate($date){
$this->date=$date;
}

public function setPerson($name,$surname,$city,$date){
  $this->name=$name;
  $this->surname=$surname;
  $this->city=$city;
  $this->date=$date;
}

function show(){
  echo <<< SHOW
  Twoje dane:<br>
  Imie i Nazwisko: $this->name   $this->surname <br>
  Miasto: $this->city <br>
  Data urodzenia: $this->date <br>

SHOW;
}

}
//$person = new Person();



 ?>
