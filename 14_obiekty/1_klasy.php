<?php
class User{
  public $name; //właściwość
  public $surname;

  public function setName($name){ //metoda
    //$this->name = "Anna";
    $this->name = $name;
  }
  function getName(){
    echo "Imie: ",$this->name;
  }
}

$person1 = new User();
$person1->name = "Janusz"; //przypisanie wartosci
echo "Imie: ",$person1->name,"<br>"; //wyświetlenie
$person1->setName("Krystyna");
echo "Imie: ",$person1->name,"<br>"; //wyświetlenie
$person1->getName();
//print_r($person1);  jako takie wyświetlenie
 ?>
