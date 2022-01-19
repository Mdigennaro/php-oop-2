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

    $this -> number = $_number;
    $this -> firstname = $_firstname;
    $this -> lastname = $_lastname;
    $this -> expiredMonth = $_expiredMonth;
    $this -> expiredYear = $_expiredYear;
    $this -> cvv = $_cvv;

  }

}

?>