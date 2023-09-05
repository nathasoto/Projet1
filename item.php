

<?php
$Produit = "Peugeot 208";
$Prix = 20000;
$URL1= "img/1.Peugeot208.jpg";
$URL2= "img/2.Peugeot208.jpg";
$URL3= "img/3.Peugeot208.jpg";
//echo " Prix $Produit  = $Prix ";

include "templates/header.php"; 
?>

<h2>Produits</h2>
<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src=<?php echo $URL1?> class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src=<?php echo $URL3?> class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src=<?php echo $URL2?> class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="card">
  <div class="card-body">
    <h5 class="card-title"><?php echo $Produit ?></h5>
    <p class="card-text"><?php echo "Prix : $Prix"?></p>
    <a href="#" class="btn btn-primary">Acheter</a>
  </div>
</div>

<?php include "templates/footer.php";?>

