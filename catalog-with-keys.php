<?php
$iphone = [
    "name" => "iPhone",
    "price" => 45000,
    "weight" => 200,
    "discount" => 10,
    "picture_url" => "https://assets.codepen.io/6093409/sprocket.svg",
    ];

include "templates/header.php"; 
?>

<div>
<h3><?php echo $iphone['name'];?></h3>
<p>Prix : <?php echo $iphone['price'];?>€</p>
<img src=<?php echo $iphone['picture_url'];?>>
</div>

<?php 
foreach($iphone as $k => $produc){
    echo " &nbsp;&nbsp; la clave $k est $produc <br/> ";

}
include "templates/footer.php";
?>