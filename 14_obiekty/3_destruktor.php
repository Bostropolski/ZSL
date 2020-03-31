<?php
  class Person{
    private $name;

    public function setName($x){
      $this->name = $x;
    }

    public function getName(){
      return $this->name;
    }


  }
  $obj = new Person();
  $obj->setName("Jan");
  echo $obj->getName;
?>
