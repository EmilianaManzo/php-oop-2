<?php 

class Product{
  public  $id;
  public  $name_category;
  public  $price;
  public  $image;

  public function __construct(int $_id , string $_name_category , float $_price ,string $_image)
  {
    $this->id = $_id;
    $this->name_category = $_name_category;
    $this->price = $_price;
    $this->image = $_image;
  }

}



?>