<?php

function getproduct(){   
 return $produits = [
    [
      "id" => "lim1",
      "name" => "LIMONCHA BIO",
      "price" => 100,00,
      "weight" => 500,
      "description" => "Thés vert et noir, riz grillé, amande et citron",
      "discount" => 20,
      "availability" => true,
      "picture_url" => "img/LIMONCHA.jpg"
    ],
    [
      "id" => "ham1",
      "name" => "THÉ DU HAMMAM",
      "price" => 10.50,
      "weight" => 400,
      "description" => "Thé vert parfumé - Fruité & Floral",
      "discount" => null,
      "availability" => true,
      "picture_url" => "img/HAMMAM.jpg"
    ],
    [
      "id" => "moi1",
      "name" => "THÉ DES MOINES",
      "price" => 10.90,
      "weight" => 350,
      "description" => "Thés noir et vert parfumés - Floral",
      "discount" => 2,
      "availability" => true,
      "picture_url" => "img/MOINES.jpg"
    ],
  ];
}


function get_product($id_produit){
   
   foreach(getproduct() as $prod){

      if($prod["id"] === $id_produit){
        $items = [$prod["name"],$prod["price"],$prod["description"],$prod["discount"],$prod["availability"],$prod["picture_url"],$prod["id"],$prod["weight"]]; 
        return $items;
        
      } 
    }
  }

function get_transporteurs(){

  return $transporteurs = [
    [
     "id" => 1542,
     "nametransport" => "La poste"
    ]
    ,
    [
      "id" => 515,
      "nametransport" => "Relais colis"
    ]
  ];
  
}

?>

