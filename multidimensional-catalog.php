<?php
include "function/my-function.php";

$products = [
"Limoncha" => [
"name" => "LIMONCHA BIO",
"price" => 14.00,
"description" => "Thés vert et noir, riz grillé, amande et citron",
"discount" => 5,
"availability" => true,
"picture_url" => "img/LIMONCHA.jpg"
],
"Hamman" => [
  "name" => "THÉ DU HAMMAM",
  "price" => 10.50,
  "description" => "Thé vert parfumé - Fruité & Floral",
  "discount" => null,
  "availability" => true,
  "picture_url" => "img/HAMMAM.jpg"
],
"Moines" => [
  "name" => "THÉ DES MOINES",
  "price" => 10.90,
  "description" => "Thés noir et vert parfumés - Floral",
  "discount" => 2,
  "availability" => false,
  "picture_url" => "img/MOINES.jpg"
],
];

include "templates/header.php"; 
?>

<div class="shop">

  <?php foreach ($products as $prod):?>
    <div class="card" style="width: 18rem;">
      <img src=<?php echo $prod['picture_url'];?> class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?php echo $prod['name'];?></h5>  
        <p class="card-text"><?php echo $prod['description'];?></p>
        <p>Prix TCC: <?php echo formatPrice(number_format($prod['price'], 2, ',', ' '));?></p><!-- call the function formatPrice et number_format francesa--> 
        <p>Prix HT : <?php echo formatPrice(number_format(priceExcludingVAT($prod['price']), 2, ',', ' '));?></p> 
        <p>Prix TCC avec Discount : <?php echo discountedPrice($prod['price'], $prod['discount']);?></p> 
        <button <?php if(!$prod['availability']): ?>disabled <?php endif; ?>>
          Acheter
        </button>
      </div>
    </div>
  <?php endforeach?>

</div>

<?php include "templates/footer.php";?>

