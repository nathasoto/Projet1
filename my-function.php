<?php
function formatPrice($prix){//add €
 echo "$prix €";
}

function priceExcludingVAT($prix){//return prix TH
    return  $ht = (100 * $prix) / (100 + 20); 
}

function discountedPrice($prix, $discount){//return prix remisé
   if($discount === null){
    echo " without discount ";
   }
   else{
    return formatPrice($prix - $discount);
   }
}