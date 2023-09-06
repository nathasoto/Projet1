
<?php 
include "function/my-function.php";

$Produit = "Thé_limoncha";
$Prix = 14;
$URL1= "img/LIMONCHA2.jpg";

//echo " Prix $Produit  = $Prix ";

include "templates/header.php"; 
?>

<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src=<?php echo $URL1?> class="img-fluid rounded-start" alt="thé">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php echo $Produit?></h5>
        <p>Une nouvelle recette bio, autour d’un mélange de thés vert et noir aux influences japonaises où les parfums torréfiés du riz grillé fusionnent parfaitement avec ceux de l'amande et du citron.</p>
        <p class="card-text"><?php echo "Prix : $Prix €"?></p>
        <a href="#" class="btn btn-primary">Ajouter au Panier</a>
      </div>
    </div>
  </div>
</div>

<?php include "templates/footer.php";?>

