<?php 
class Animal{
  public $type;
  public $icon;

  public function __construct(string $_type )
  {
    $this->type =$_type;
    $this->icon = $this -> setIcon($_type);
  }

  public function setIcon($_type){
      if($_type == 'cane'){
        echo '<i class="fa-solid fa-dog"></i>';
      }elseif ($_type == 'gatto'){
        echo '<i class="fa-solid fa-cat"></i>';
      }
    } 

}

?>