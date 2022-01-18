<?php

class Product{

  private $name;
  private $brand;
  private $size;
  private $price;

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

}

?>