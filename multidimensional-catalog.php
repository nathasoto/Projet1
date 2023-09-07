<?php
include "function/my-function.php";
include "function/articles.php";
include "templates/header.php"; 




?>



<form action="cart.php" method="post">
   
  <div class="shop">
    <?php foreach (getproduct() as $prod):?>
      <div class="card" style="width: 18rem;">
        <img src=<?php echo $prod['picture_url'];?> class="card-img-top" alt="..."> 
        <div class="card-body">
          <h5 class="card-title"><?php echo $prod['name'];?></h5>  
          <input type="hidden" name="title" value="<?php echo $prod['name'];?>"/>
          <p class="card-text"><?php echo $prod['description'];?></p>
          <p>Prix TTC: <?php echo formatPrice(number_format($prod['price'], 2, ',', ' '));?></p><!-- call the function formatPrice et number_format francesa--> 
          <p>Prix HT : <?php echo formatPrice(number_format(priceExcludingVAT($prod['price']), 2, ',', ' '));?></p> 
          <p>Prix TCC avec Discount : <?php echo discountedPrice($prod['price'], $prod['discount']);?></p> 
          <select class= "quantite" name="weight" id="">
            <option value="100g">100g</option>
            <option value="500g">500g</option>
            <option value="1kg">1kg</option>
          </select>
          <select class= "quantite" name="quantite" id="">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
          </select>
          <input class ="button" type="submit" <?php if(!$prod['availability']): ?>disabled <?php endif; ?> name="submit" value="AJOUTER AU PANIER" >
          <input type="hidden" name="nathalie" value="<?php echo $prod['id']?>" >

        </div>
      </div>
    <?php endforeach?>
  </div>

</form>

<?php include "templates/footer.php";?>

