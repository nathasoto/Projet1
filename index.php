<?php 
include "function/my-function.php";

$URL1= "img/imagen1.jpg";
$URL2= "img/imagen2.jpg";
$URL3= "img/imagen3.jpg";
//echo " Prix $Produit  = $Prix ";

include "templates/header.php"; 
?>

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

<?php include "templates/footer.php";?>