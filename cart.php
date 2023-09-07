<?php
include "function/my-function.php";
include "function/articles.php";
include "templates/header.php"; 
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
      <th scope="row">Produit</th>
      <td><?php echo ($_POST['title']);?></td>
      <td>52</td>
      <td>15165</td>
      <td>15165</td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td>45</td>
      <
    </tr>
    <tr>
      <th scope="row"></th>
      <td>16</td>
    </tr>
  </tbody>
</table>

<?php include "templates/footer.php";?>