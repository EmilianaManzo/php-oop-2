<?php 
require_once __DIR__ . '/Animal.php';
require_once __DIR__ . '/Box.php';

class Toy extends Product{
  use Box;

  public $name;
  public $brand;
  public $animal;

  public function __construct(int $_id , string $_name_category , float $_price ,string $_image, string $_name, string $_brand, Animal $_animal )
  {
    parent ::__construct($_id , $_name_category, $_price, $_image );
    
    $this-> setName($_name);
    $this->brand = $_brand;
    $this->animal = $_animal;
  }

  public function setName($_name){
    if (empty($_name) || strlen(($_name) < 3 ) ){
      throw new Exception("Il nome deve contenere almeno 3 caratteri");
    }
    $this->name = $_name;
  }
}


?>