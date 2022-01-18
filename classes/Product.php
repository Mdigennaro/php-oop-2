<?php

class Product{

  private $name;
  private $brand;
  private $price;
  private $discount = 0;
  private $size;

  public function __construct($_name, $_brand)
  {
    $this->name = $_name;
    $this->brand = $_brand;
  }

  public function setName($_name){
    $this->name = $_name;
  }

}

?>