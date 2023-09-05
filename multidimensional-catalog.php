<?php
$products = [
"iphone" => [
"name" => "iPhone",
"price" => 450,
"weight" => 200,
"discount" => 10,
"picture_url" => "https://assets.codepen.io/6093409/sprocket.svg"
],
"ipad" => [
"name" => "iPad",
"price" => 450,
"weight" => 400,
"discount" => null,
"picture_url" => "https://assets.codepen.io/6093409/sprocket.svg"
],
];

include "templates/header.php"; 
?>
<div>
<h3><?php echo $products['iphone']['name'];?></h3>
<p>Prix : <?php echo formatPrice($products['iphone']['price']);?></p><!-- call the function formatPrice-->
<p>Prix HT : <?php echo formatPrice(priceExcludingVAT($products['iphone']['price']));?></p>
<p>Prix TCC avec Discount : <?php echo discountedPrice($products['iphone']['price'], $products['iphone']['discount']);?></p>
<img src=<?php echo $products['iphone']['picture_url'];?>>
</div>
<div>
<h3><?php echo $products['ipad']['name'];?></h3>
<p>Prix TTC : <?php echo formatPrice($products['ipad']['price']);?></p><!-- call the function formatPrice-->
<p>Prix HT : <?php echo formatPrice(priceExcludingVAT($products['ipad']['price']));?></p>
<p>Prix TCC avec Discount : <?php echo discountedPrice($products['ipad']['price'], $products['ipad']['discount']);?></p>
<img src=<?php echo $products['ipad']['picture_url'];?>>
</div>

<?php
foreach($products as $k1 => $prod){
    echo"$k1 <br/>";
    foreach($prod as $k2 => $detalle){
      echo"$k2 = $detalle <br/> ";
    }

}

?>
<?php include "templates/footer.php";?>

