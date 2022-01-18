<?php

class User {
  private $firstname;
  private $lastname;
  private $email;
  private $phoneNumber;
  private $productBuy;
  private $discount = 0;

  function __construct($_firstname, $_lastname)
  {
    $this -> firstname = $_firstname;
    $this -> lastname = $_lastname;
  }

  public function setFirstname($_firstname){
    $this -> firstname = $_firstname;
  }

  public function setLastname($_lastname){
    $this -> lastname = $_lastname;
  }

  public function setEmail($_email){
    $this -> email = $_email;
  }

  public function setPhoneNumber($_phoneNumber){
    $this -> phoneNumber = $_phoneNumber;
  }

  public function setproductBuy($_productBuy){
    $this -> productBuy = $_productBuy;
  }
  
  public function setDiscount($_discount){
    $this -> discount = $_discount;
  }

  public function getFirstname(){
    return $this -> firstname;
  }

  public function getLastname(){
    return $this -> lastname;
  }

  public function getEmail(){
    return $this -> email;
  }

  public function getPhoneNumber(){
    return $this -> phoneNumber;
  }

  public function getDiscount(){
    return $this -> discount;
  }

  public function hasProductBuy($_product){
    $this -> productBuy = $_product;
  }

  public function getDiscountPrice(){
    $starterPrice = $this -> productBuy -> getPrice();

    $discountPrice = $starterPrice - (($starterPrice * $this -> discount) / 100);

    return number_format($discountPrice, 2, ",","");
  }

}

?>