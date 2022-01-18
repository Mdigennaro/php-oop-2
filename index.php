<?php

require_once __DIR__."/classes/Product.php";
require_once __DIR__."/classes/User.php";

$new_product = new Product("Giubbotto", "MDG");
$new_product -> setPrice(200);
$new_product -> setSize("XXL");

var_dump($new_product);

$new_user = new User("Michele", "Di Gennaro");
$new_user -> setEmail("michele.digennaro@gmail.com");
$new_user -> setPhoneNumber("+39 01234567890");
$new_user -> setDiscount(0);


var_dump($new_user);



?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shop</title>
</head>
<body>

<h1>BOOLAZON</h1>

<div>
  <h2>Prodotto</h2>

  <h2>Nome: <?php echo $new_product -> getName() ?> </h2>
  
  <h3>Marca: <?php echo $new_product -> getBrand() ?> </h3>
  
  <h5>Taglia: <?php echo $new_product -> getSize() ?> </h5>
  
  <p>
    Prezzo: <?php echo $new_product -> getPrice() ?> € 
  </p> 
</div>

<div>
  <h2>Dati acquirente</h2>

  <h2>Nome: <?php echo $new_user -> getFirstName() ?> <?php echo $new_user -> getLastName() ?></h2>
  
  <h3>E-mail: <?php echo $new_user -> getEmail() ?> </h3>
  
  <h5>Numero di telefono: <?php echo $new_user -> getPhoneNumber() ?> </h5>
  
  <p>
    Prezzo: <?php  ?> € 
  </p> 
</div>


  
</body>
</html>