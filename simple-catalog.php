<?php 

$products = ["iphone","ipad","imac"];// create array

/*sort($products); //sort array 
var_export($products); // show array

echo reset($products);//Afficher le premier produit 
echo end($products); //Afficher le dernier produit 
echo $products[0] . '  ' . $products[2];
*/

/*$lengTabl = 0;

while($lengTabl <= 2){
   echo $products[$lengTabl].'  ';
    $lengTabl ++;
}


for($lengTabl = 0 ; $lengTabl <= 2; $lengTabl++){
    echo $products[$lengTabl].'  ';
}

for($lengTabl = 0 ; $lengTabl < sizeof($products); $lengTabl++){
    echo $products[$lengTabl].'  ';
}*/

foreach ($products as $prod){
   echo "&nbsp;&nbsp; $prod <br/> ";
}
