<?php

function formatPrice($prix){//add €
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
    return $prix;

   }
    return $prix -($prix * ($discount/100));
   
}
function FormatDiscounted($discount){
   echo " -$discount %";
}

function Total(array $items, int $cantidad):float{

  if($items[3] != null){
    $Total = discountedPrice($items[1], $items[3]) * $cantidad;
    return $Total;
  } 
    $Total = $items[1] * $cantidad;
    return $Total;

}
function fraisdePort(string $transporteur ,int $weight,int $cantidad, float $total):float{

if($transporteur === 'Retrai en Drive'){
  return 0;
}

 $weightTotal = $weight * $cantidad;
  if($weightTotal <= 500){
   return 5;
  }
  if($weightTotal > 500 && $weightTotal <= 2000 ){
    return  $total * 0.10 ;     
  }
  return 0;
  
}


