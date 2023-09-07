<?php
function getproduct(){   
 return $produits = [
    [
      "id" => "lim1",
      "name" => "LIMONCHA BIO",
      "price" => 14.00,
      "description" => "Thés vert et noir, riz grillé, amande et citron",
      "discount" => 20,
      "availability" => true,
      "picture_url" => "img/LIMONCHA.jpg"
    ],
    [
      "id" => "ham1",
      "name" => "THÉ DU HAMMAM",
      "price" => 10.50,
      "description" => "Thé vert parfumé - Fruité & Floral",
      "discount" => null,
      "availability" => true,
      "picture_url" => "img/HAMMAM.jpg"
    ],
    [
      "id" => "moi1",
      "name" => "THÉ DES MOINES",
      "price" => 10.90,
      "description" => "Thés noir et vert parfumés - Floral",
      "discount" => 2,
      "availability" => false,
      "picture_url" => "img/MOINES.jpg"
    ],
  ];
}

function get_product($id_produit){
   
    foreach(getproduct() as $prod){
        if($id_produit === $prod){
          return $prod;

        }
        echo "producto no existe";

    }

}



?>