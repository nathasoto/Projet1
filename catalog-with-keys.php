<?php
include "function/my-function.php";
$iphone = [
    "name" => "iPhone",
    "price" => 45000,
    "weight" => 200,
    "discount" => 10,
    "picture_url" => "https://assets.codepen.io/6093409/sprocket.svg",
    ];

include "templates/header.php"; 
$prixht = priceExcludingVAT($iphone['price']);
?>

<div>
<h3><?php echo $iphone['name'];?></h3>
<p>Prix TCC : <?php echo formatPrice($iphone['price']);?></p> <!-- call the function formatPrice-->
<p>Prix HT : <?php echo formatPrice(priceExcludingVAT($iphone['price']));?></p><!-- call the function formatPrice and funcion priceExcludingVAT-->
<p>Prix TCC avec Discount : <?php echo discountedPrice($iphone['price'], $iphone['discount']);?></p>
<img src=<?php echo $iphone['picture_url'];?>>
</div>

<?php 
foreach($iphone as $k => $produc){
    echo " &nbsp;&nbsp; la clave $k est $produc <br/> ";

}

include "templates/footer.php";
?>