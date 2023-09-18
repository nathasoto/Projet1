<?php
include "function/my-function.php";
include "function/articles.php";
include "templates/header.php";
session_start();

?>


<div class="panier">
  <a href="panier.php"><img class="imgPanier" src="img/panier.jpg" alt="panier"></a>
</div>

<div class="shop">
  <?php foreach (getproduct() as $prod) : ?>

    <div class="card" style="width: 18rem;">
      <img src=<?php echo $prod['picture_url']; ?> class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?php echo $prod['name']; ?></h5>
        <p class="card-text"><?php echo $prod['description']; ?></p>
        <p class="descuento"><?php if ($prod['discount'] != null) : echo formatPrice($prod['price']) . ' TTC '; ?></p>
        <p class="discount"><?php FormatDiscounted($prod['discount']) ?></p><?php endif; ?>
      <strong>
        <p><?php echo ' TTC' . formatPrice(discountedPrice($prod['price'], $prod['discount'])); ?></p>
      </strong>

      <form action="produit.php" method="post">

        <!-- <select class= "quantite" name="weight" id="weight">
                  <option value="100g">100g</option>
                  <option value="500g">500g</option>
                  <option value="1kg">1kg</option>
                </select> -->

        <label for="quantite"> Quantité :</label>
        <select class="quantite" name="cantidad" id="cantidad">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>

        <input type="hidden" name="id_produit" value="<?php echo $prod["id"] ?>">
        <input class="button" type="submit" <?php if (!$prod['availability']) : ?>disabled <?php endif; ?> name="btnAjouter" value="AJOUTER AU PANIER">

      </form>
      </div>
    </div>
  <?php endforeach ?>
</div>


<?php




if (isset($_REQUEST["btnAjouter"])) { //pulsamos en boton 

  if (!isset($_SESSION['panier'])) { //preguntamos si no hay secion 

    $produit = array(

      'id_producto' => $_POST["id_produit"],
      'cant' => $_POST['cantidad']

    );

    $_SESSION['panier'][0] = $produit;
  } else {
    $numberProduit = count($_SESSION['panier']);

    echo  $numberProduit;

    if (array_search($_POST["id_produit"], $_SESSION['panier'][$numberProduit - 1])) {
      $_SESSION['panier'][$numberProduit - 1]['cant'] =  $_SESSION['panier'][$numberProduit - 1]['cant'] + $_POST['cantidad'];
    } else {
      $produit['id_producto'] = $_POST["id_produit"];
      $produit['cant'] = $_POST['cantidad'];

      $_SESSION['panier'][$numberProduit] = $produit;
    }
  }
  echo '<script>alert("Produit ajoute")</script>';
}


//print_r($_SESSION["panier"]);

include "templates/footer.php"; ?>