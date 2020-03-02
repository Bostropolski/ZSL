<?php
class User{
  public $name; //właściwość
  public $surname;
  public $city;
  public $height;

  public function setName($name){ //metoda
    //$this->name = "Anna";
    $this->name = $name;
  }
  public function setCity($city){
    $this->city = $city;
  }
  public function setHeight($height){
    $this->height = $height;
  }
  function getName(){
    return $this->name;
  }
  public function setSurname($surname){ //metoda
    //$this->name = "Anna";
    $this->surname = $surname;
  }
  function getSurname(){
    return $this->surname;
  }
  public function show(){
    echo <<<SHOW
      <hr>Twoje dane:<br>
      Imie: $this->name<br>
      Nazwisko: $this->surname<br>
      Miasto: $this->city<br>
      Wzrost: $this->height<br>
SHOW;
  }
  public function setUser($name,$surname,$city,$height){
    $this->name=$name;
    $this->surname=$surname;
    $this->city=$city;
    $this->height=$height;
  }
}

$person1 = new User();
/*$person1->name = "Janusz"; //przypisanie wartosci
echo "Imie: ",$person1->name,"<br>"; //wyświetlenie
$person1->setName("Krystyna");
echo "Imie: ",$person1->name,"<br>"; //wyświetlenie
*/
$person1->setName("Anna ");

$person1->setSurname("Nowak");
$person1->setCity("Kraków");
$person1->setHeight(150);
//echo "Nazwisko: ",$person1->surname,"<br>"; //wyświetlenie

//echo "Twoje dane:","<br>","Imie: ",$person1->name,"<br>","Nazwisko: ",$person1->surname;


$person1->show();
$person1->setUser("Agnieszka","Kowalska","Poznan",155);
$person1->show();





//print_r($person1);  jako takie wyświetlenie
 ?>
