<?php

require_once __DIR__. "/User.php";

class GoldUser extends User{

  function __construct($_firstname, $_lastname)
  {
    parent::__construct($_firstname, $_lastname);
    $this -> discount = 40;
  }

  public function setDiscount($_discount)
  {
    $this -> discunt += $_discount;
  }

}

?>