<?php

function formatPrice( $prix){//add €
  $prix1 = number_format($prix, 2, ',', ' ');
  echo "$prix1 €";
}
// function formatPrice2(float $prix ):string  {//teacher
//     return $prix . ' €';
//   }
function addTVA(float $prix ):float  {
    return $prix * 1.2;
  }
function priceExcludingVAT($prix){//return prix TH
    return $ht = (100 * $prix) / (100 + 20); 
}

function discountedPrice($prix, $discount){//return prix remisé
   if($discount === null){
    echo " without discount ";
   }
    return $prix -($prix * ($discount/100));
   
}

