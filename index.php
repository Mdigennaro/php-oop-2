<?php

require_once __DIR__."/classes/Product.php";

$new_product = new Product("Giubbotto", "MDG");
$new_product -> setPrice(200);
$new_product -> setSize("XXL");
$new_product -> setDiscount(20);

var_dump($new_product)

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

<h2> <?php echo $new_product -> getName() ?> </h2>

<h3> <?php echo $new_product -> getBrand() ?> </h3>

<h5> <?php echo $new_product -> getSize() ?> </h5>

<p>
  Prezzo: <?php echo $new_product -> getPrice() ?> €  
</p>
<p>
  Sconto: <?php echo $new_product -> getDiscount() ?> %  
</p>
<p>
  Prezzo finale: <?php echo $new_product -> getFinalPrice() ?> €
  </p>
  
</body>
</html>