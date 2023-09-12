<?php
include "function/my-function.php";
include "function/articles.php";
include "templates/header.php"; 

$items = get_product($_POST['id_produit']);
 //echo $items[0];
 //echo ($_POST['id_produit']);
 ?>

<table class="table table-borderless">
  
<thead>
    <tr>
    <th scope="col"></th>
      <th scope="col">Produit</th>
      <th scope="col">Prix unitaire</th>
      <th scope="col">Quantité</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <th scope="row"></th>
      <td></td>
      <td><small><p class = "discount"><?php if($items[3] != null): echo formatPrice($items[1])?></p></small></td><?php endif; ?>
      <td></td>
      <td></td>
    </tr>
    <tr>
    <th scope="row"></th>
      <td><?php echo $items[0]?></td>
      <td><?php echo formatPrice(discountedPrice($items[1], $items[3]))?></td>
      <td><?php echo $_POST['cantidad']?></td>
      <td><?php echo formatPrice(Total($items, $_POST['cantidad']));?></td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td>Total HT</td>
      <td><?php echo formatPrice(priceExcludingVAT(Total($items, $_POST['cantidad'])));?></td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td>TVA</td>
      <td><?php echo formatPrice(Total($items, $_POST['cantidad']) - priceExcludingVAT(Total($items, $_POST['cantidad'])));?></td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      
      <form action="cart.php" method="post">
      <input type="hidden" name="id_produit" value="<?php echo $_POST['id_produit']?>">
      <input type="hidden" name="cantidad" value="<?php echo $_POST['cantidad']?>">
      <input type="hidden" name="weight" value="<?php echo $items[7]?>">
      <td><label for="trasporteur">Choix du transporteur : </label>
            <select class= "quantite" name="trasporteur" id="trasporteur">
                    <?php foreach (get_transporteurs() as $transpor): ?>
                    <option value="<?php echo $transpor["nametransport"]?>"><?php echo $transpor["nametransport"]?></option>
                    <?php endforeach?>
                    </select></td>
          
      <td><input class ="button" type="submit" name="btnAjouter" value="VALIDER"></td>
      </form> 
    <?php if(isset($_REQUEST["btnAjouter"])): ?>
        <th scope="row"></th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
   <th scope="row"></th>
      <td></td>
      <td></td>
      <td>TRANSPORT : <strong><?php echo $_POST['trasporteur']?></strong></td>
      <td><?php echo formatPrice(fraisdePort($_POST['trasporteur'],$items[7],$_POST['cantidad'], Total($items, $_POST['cantidad'])))?></td>
    </tr>
    <th scope="row"></th>
      <td></td>
      <td></td>
      <td><strong>Total TCC </strong></td>
      <td><strong><?php echo formatPrice(Total($items, $_POST['cantidad'] )+ fraisdePort($_POST['trasporteur'],$items[7],$_POST['cantidad'], Total($items, $_POST['cantidad'])))?></strong></td>
    </tr>
    <?php endif ?>     
    </tr>
  </tbody>
</table>

<?php include "templates/footer.php";?>