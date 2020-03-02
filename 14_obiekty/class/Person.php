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

function setPerson(){
  $this->name=$name;
  $this->surname=$surname;
  $this->city=$city;
  $this->date=$date;
}

function show(){
  echo <<< SHOW
  Twoje dane:<br>
  Imie i Nazwisko: $name $surname <br>
  Miasto: $city <br>
  Data urodzenia: $date <br>

SHOW;
}

}
$person = new Person();
$p


 ?>
