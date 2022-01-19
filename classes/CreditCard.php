<?php

class CreditCard{

  private $number;
  private $firstname;
  private $lastname;
  private $expiredMonth;
  private $expiredYear;
  private $cvv;

  function __construct($_number,$_firstname,$_lastname,$_expiredMonth,$_expiredYear,$_cvv)
  {

    $this -> number = $this -> isValidNumber($_number);
    $this -> firstname = $_firstname;
    $this -> lastname = $_lastname;
    $this -> expiredMonth = $this -> isValidExpiredMonth($_expiredMonth) ;
    $this -> expiredYear =  $this -> isValidExpiredYear($_expiredYear);
    $this -> cvv = $this -> isValidCvv($_cvv);
    
  }
  //SET
  public function setNumber($_number){
    $this -> number = $this -> isValidNumber($_number) ;
  }

  public function setFirstName($_firstname){
    $this -> firstname = $_firstname;
  }

  public function setLastName($_lastname){
    $this -> lastname = $_lastname;
  }

  public function setExpiredMonth($_expiredMonth){
    $this -> expiredMonth = $this -> isValidExpiredMonth( $_expiredMonth);
  }

  public function setExpiredYear($_expiredYear){
    $this -> expiredYear = $this -> isValidExpiredYear($_expiredYear);
  }

  public function setCvv($_cvv){
    $this -> cvv = $this -> isValidCvv($_cvv);
  }

  //GET
  public function getNumber(){
    return $this -> number;
  }

  public function getFirstName(){
    return $this -> firstname;
  }

  public function getLastName(){
    return $this -> lastname;
  }

  public function getExpiredMonth(){
    return $this -> expiredMonth;
  }

  public function getExpiredYear(){
    return $this -> expiredYear;
  }
  
  public function getCvv(){
    return $this -> cvv;
  }

  //Private 

  private function isValidNumber($number){
    
    if (!is_int($number) || strlen($number) != 9) {
      
      throw new \Exception ('Numero carta non accettato');
      
    }
    
    return $number;
    
  }
  
  private function isValidExpiredYear($expiredYear){
    
    $todayYear = (date("Y"));
    
    if($todayYear > $expiredYear){
      
      throw new Exception("Carta scaduta");
      
    }
    
    return $expiredYear;
    
  }
  
  private function isValidExpiredMonth($expiredMonth){
    
    $todayYear = (date("Y"));
    $todayMonth = (date("m"));
    
    if(($todayYear > $this -> expiredYear) && ($todayMonth > $expiredMonth)){
      
      throw new Exception("Carta scaduta");
      
    }
    
    return $expiredMonth;
    
  }
  
  private function isValidCvv($cvv){
  
    if ((!is_int($cvv)) || strlen($cvv) != 3) {
  
      throw new Exception("Cvv non corretto");
        
    }
  
    return $cvv;
  
  }
  
}

?>