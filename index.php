<?php

require_once __DIR__."/classes/Product.php";
require_once __DIR__."/classes/User.php";
require_once __DIR__."/classes/GoldUser.php";

$new_product = new Product("Giubbotto", "MDG");
$new_product -> setPrice(200);
$new_product -> setSize("XXL");

var_dump($new_product);

$new_user = new User("Michele", "Di Gennaro");
$new_user -> setEmail("michele.digennaro@gmail.com");
$new_user -> setPhoneNumber("+39 01234567890");
$new_user -> setDiscount(0);
$new_user -> hasProductBuy($new_product);

var_dump($new_user);

$new_goldUser = new GoldUser("Giovanni", "Muciaccia");
$new_goldUser -> setEmail("giovannimuciaccia@gmail.com");
$new_goldUser -> setPhoneNumber("+39 0987654321");
$new_goldUser -> hasProductBuy($new_product);


var_dump($new_goldUser)


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
  <h2>Dati Utente</h2>

  <h2>Nome: <?php echo $new_user -> getFirstName() ?> <?php echo $new_user -> getLastName() ?></h2>

  <h3>E-mail: <?php echo $new_user -> getEmail() ?> </h3>

  <h5>Numero di telefono: <?php echo $new_user -> getPhoneNumber() ?> </h5>

</div>

<div>
  <h2>Carrello</h2>
  
  <h2>Nome: <?php echo $new_product -> getName() ?> </h2>
  
  <h3>Marca: <?php echo $new_product -> getBrand() ?> </h3>
  
  <h5>Taglia: <?php echo $new_product -> getSize() ?> </h5>

  <p>
    Prezzo: <?php echo $new_product -> getPrice() ?> € 
  </p> 
  
  
</div>

<div>

  <h2>Totale acquisti</h2>

  <p>
    Hai lo sconto del <?php echo $new_user -> getDiscount() ?> %
  </p>

  <p>
    Prezzo finale: <?php echo $new_user -> getDiscountPrice() ?> € 
  </p> 

</div>

<!------------------->

<div>
  <h2>Dati Utente Gold</h2>

  <h2>Nome: <?php echo $new_goldUser -> getFirstName() ?> <?php echo $new_goldUser -> getLastName() ?></h2>

  <h3>E-mail: <?php echo $new_goldUser -> getEmail() ?> </h3>

  <h5>Numero di telefono: <?php echo $new_user -> getPhoneNumber() ?> </h5>

</div>

<div>
  <h2>Carrello</h2>
  
  <h2>Nome: <?php echo $new_product -> getName() ?> </h2>
  
  <h3>Marca: <?php echo $new_product -> getBrand() ?> </h3>
  
  <h5>Taglia: <?php echo $new_product -> getSize() ?> </h5>

  <p>
    Prezzo finale: <?php echo $new_product -> getPrice() ?> € 
  </p> 
  
  
</div>

<div>

  <h2>Totale acquisti</h2>

  <p>
    Hai lo sconto del <?php echo $new_goldUser -> getDiscount() ?> %
  </p>

  <p>
    Prezzo: <?php echo $new_goldUser -> getDiscountPrice() ?> € 
  </p> 

</div>

  
</body>
</html>