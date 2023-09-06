<?php
function formatPrice( $prix){//add €
 echo "$prix €";
}
function formatPrice2(float $prix ):string  {//teacher
    return $prix . ' €';
  }
function addTVA(float $prix ):float  {
    return $prix * 1.2;
  }
function priceExcludingVAT($prix){//return prix TH
    return round( $ht = (100 * $prix) / (100 + 20)); //round por los numeros despues de la coma
}

function discountedPrice($prix, $discount){//return prix remisé
   if($discount === null){
    echo " without discount ";
   }
   else{
    return formatPrice(number_format($prix - $discount, 2, ',', ' ')); 
   }
}