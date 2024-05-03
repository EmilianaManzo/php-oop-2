<?php 
require_once __DIR__ . '/Animal.php';

class Category extends Product{
  public $name;
  public $brand;
  public $animal;

  public function __construct(int $_id , string $_name_category , float $_price ,string $_image, string $_name, string $_brand, Animal $_animal)
  {
    parent ::__construct($_id , $_name_category, $_price, $_image );

    $this->name = $_name;
    $this->brand = $_brand;
    $this->animal = $_animal;
  }
}


?>