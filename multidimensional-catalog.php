<?php
include "function/my-function.php";
include "function/articles.php";
include "templates/header.php"; 


?>



   
  <div class="shop">
    <?php foreach (getproduct() as $prod):?>
      
      <div class="card" style="width: 18rem;">
        <img src=<?php echo $prod['picture_url'];?> class="card-img-top" alt="..."> 
        <div class="card-body">
          <h5 class="card-title"><?php echo $prod['name'];?></h5>  
          <p class="card-text"><?php echo $prod['description'];?></p>
          <p><?php echo formatPrice($prod['price']);?> TTC <?php if ($prod['discount'] != null ) echo '-'. $prod['discount'].'%'; ?></p><!-- call the function formatPrice et number_format francesa--> 
          <strong><p> <?php if ($prod['discount'] != null ) echo ' TTC'.formatPrice(discountedPrice($prod['price'], $prod['discount'])); ?></p> </strong>
          
          <form action="cart.php" method="post">

                <!-- <select class= "quantite" name="weight" id="weight">
                  <option value="100g">100g</option>
                  <option value="500g">500g</option>
                  <option value="1kg">1kg</option>
                </select> -->
                
                <label for="quantite"> Quantité :</label>
                <select class= "quantite" name="cantidad" id="cantidad">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                </select>
              
              <input type="hidden" name="id_produit" value="<?php echo $prod["id"]?>">
              <input class ="button" type="submit" <?php if(!$prod['availability']): ?>disabled <?php endif; ?> name="submit" value="AJOUTER AU PANIER" >

          </form>

        </div>
      </div>
    <?php endforeach?>
    
  </div>



<?php include "templates/footer.php";?>

