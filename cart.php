<?php
include "function/my-function.php";
include "function/articles.php";
include "templates/header.php"; 


 $items = get_product($_POST['id_produit']);
 //echo $items[0];
 //echo ($_POST['id_produit']);
 $Total = $items[1] * $_POST['cantidad'];
 
 
 ?>

<table class="table">
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
      <td><?php echo $items[0]?></td>
      <td><?php echo  formatPrice($items[1])?></td> 
      <td><?php echo $_POST['cantidad']?> </td>
      <td><?php echo formatPrice($Total);?></td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      
    </tr>
    <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td>Total HT</td>
      ><td><?php echo formatPrice(priceExcludingVAT($Total));?></td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td>TVA</td>
      <td><?php echo formatPrice($Total - priceExcludingVAT($Total));?></td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td>Choix du transporteur</td>
      <td></td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>

      <td><select class= "quantite" name="trasporteur" id="trasporteur">
                  <option value="1">La poste</option>
                  <option value="2">Relais colis</option>
                </select></td>
      <td><button>valider</button></td>
      
    </tr>
  </tbody>
</table>

<?php include "templates/footer.php";?>