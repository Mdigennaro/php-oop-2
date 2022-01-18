<?php

class Product{

  private $name;
  private $brand;
  private $size;
  private $price;
  private $discount = 0;

  public function __construct($_name, $_brand)
  {
    $this -> name = $_name;
    $this -> brand = $_brand;
  }

  public function setName($_name){
    $this -> name = $_name;
  }

  public function setBrand($_brand){
    $this -> brand = $_brand;
  }
  
  public function setSize($_size){
    $this -> size = $_size; 
  }

  public function setPrice($_price){
    $this -> price = $_price;
  }

  public function setDiscount($_discount){
    $this -> discount = $_discount;
  }

  public function getName(){
    return $this -> name;
  }

  public function getBrand(){
    return $this -> brand;
  }
  
  public function getSize(){
    return $this -> size;
  }
  
  public function getPrice(){
    return $this -> price;
  }

  public function getDiscount(){
    return $this -> discount;
  }

  public function getFinalPrice(){
    $finalPrice = $this -> price - (($this -> price * $this -> discount) / 100);

    return number_format($finalPrice, 2, ",", "");
  }


}

?>