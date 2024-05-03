<?php 

class Product{
  protected  $id;
  protected  $name;
  protected  $price;
  protected  $img;

  public function __construct(int $_id , string $_name , float $_price ,string $_img)
  {
    $this->id = $_id;
    $this->name = $_name;
    $this->price = $_price;
    $this->img = $_img;
  }

}



?>